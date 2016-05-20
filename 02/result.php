<?php
echo "名前：".$_POST['name1']." ".$_POST['name2']."<br>";

 $sex=$_POST['rdo'];
 echo "性別：　";
if($sex == 0 ){
    echo "不明<br>";
}elseif($sex == 1){
        echo "男<br>";
    }elseif($sex == 2){
        echo "女<br>";
    }


echo "住所：".$_POST['address']."<br>";

echo "電話番号：".$_POST['tell1']."-".$_POST['tell2']."-".$_POST['tell3']."<br>";
echo "E-mail:".$_POST['mail1']."@".$_POST['mail2']."<br>";

echo "知った理由";
$where  = array("なし","インターネット" ,"CM","チラシ","知人の紹介");
$aa = $_POST['where'] ;
$n = count($aa);
for($i=0;$i<$n; $i++){
    echo "：".$where[$aa[$i]];
}
echo "<br>";
$question = array("お仕事の依頼について", "製品の購入について","製品について","採用について");
echo "質問項目：".$question[$_POST['question']]."<br>";

echo "質問の内容:".$_POST['inquiry'];

 ?>
