<!DOCTYP html>
<html >
<head>
    <meta charset = "utf-8">
    <title>出力フォーム</title>

    <!---js リンク先のID指定-->
    <?php
 $linka = $_POST['linka'] ;
    echo "<link rel= 'stylesheet' type= 'text/css' href= $linka>";
    ?>
    <link rel="stylesheet" type="text/css"
  href="style.css" id="sample">
<script type="text/javascript">
function changesytle(cssid,cssfile) {
document.getElementById(cssid).href = cssfile;
}
</script>
<!--CSSファイルを切り替えと表示するためのプルダウンメニューを記述します。-->
<select onchange="changesytle('sample',value);">
   <option value="sample.css">水色</option>
   <option value="sample1.css">きみどり</option>
   <option value="sample2.css">ピンク</option>
</select>
</head>
<body>
<div class="main2">

<h1><center>お問い合わせ完了</center></h1>
<form action="result.php" method="post">
<div class="a">
<?php
echo "名前：".$_POST['name1']." ".$_POST['name2']."<br>";
?>
</div >
<div class="b"><?php
 $sex=$_POST['rdo'];
 echo "性別：　";
if($sex == 0 ){
    echo "不明<br>";
}elseif($sex == 1){
        echo "男<br>";
    }elseif($sex == 2){
        echo "女<br>";
    }
?></div>
<div class="a"><?php
echo "住所：".$_POST['address']."<br>";
?>
</div>
<div class="b"><?php
echo "電話番号：".$_POST['tell1']."-".$_POST['tell2']."-".$_POST['tell3']."<br>";
?>
</div>
<div class="a">
<?php
echo "E-mail:".$_POST['mail1']."@".$_POST['mail2']."<br>";
?>
</div>
<div class="b">
<?php
echo "知った理由";
$where  = array("なし","インターネット" ,"CM","チラシ","知人の紹介");
$aa = $_POST['where'] ;
$n = count($aa);
for($i=0;$i<$n; $i++){
    echo "：".$where[$aa[$i]];
}
?>
</div>
<div class="a">
<?php
$question = array("お仕事の依頼について", "製品の購入について","製品について","採用について");
echo "質問項目：".$question[$_POST['question']]."<br>";
?>
</div>

<div class="b"> <?php
echo "質問の内容<br>";
  ?>
  </div>
 <div class="a"><?php
    $bb =nl2br($_POST['inquiry']);
    echo $bb;
  ?></br>

      </form>
  </div>
<?php
    $file = 'contact_log.txt';
$current = file_get_contents($file);
$current .= "{"."読み込むCSS".$_POST['linka']."\n";
    $current .= "名前".$_POST['name1']." ".$_POST['name2']."\n";
     $sex=$_POST['rdo'];
    if($sex == 0 ){
        $file = 'contact_log.txt';
        $current .= "性別：　不明 \n";
    }elseif($sex == 1){
            $file = 'contact_log.txt';

            $current .= "男 \n";

        }elseif($sex == 2){
            $file = 'contact_log.txt';
            $current .= "女 \n";
        }
        $current .= "住所：".$_POST['address']."\n";
        $current .=  "電話番号：".$_POST['tell1']."-".$_POST['tell2']."-".$_POST['tell3']."\n";
        $current .=   "E-mail:".$_POST['mail1']."@".$_POST['mail2']."\n";
        $current .=   "どこで知ったか";
        for($i=0;$i<$n; $i++){
            $current .=   "：".$where[$aa[$i]];
        }
        $current .=   "\n";
        $current .=   "質問項目：".$question[$_POST['question']]."\n";
        $current .=   "質問の内容\n";
            $current .=   $_POST['inquiry']."}"."\n".date('Y年m月d日 H時i分s秒',time())."\n\n";
// 結果をファイルに書き出します
file_put_contents($file, $current);
 ?>
<center><inp2><INPUT type="button" value="戻る" onClick="history.go(-1)"style="width:200px; height:50px"></inp2>
</center>



</body>

</html>
