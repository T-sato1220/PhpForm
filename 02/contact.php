<!DOCTYP html>
<html >
    <head>
        <meta charset = "utf-8">
            <title>質問フォーム</title>
    <!--css最初の読み込み-->
            <link rel="stylesheet" type="text/css" href="sample.css">
            <?php
            //  戻ってきたときのCSSの読み込み
            if(empty($_POST['linka'])===false){
         $linka = $_POST['linka'] ;
            echo "<link rel= 'stylesheet' type= 'text/css' href= $linka>";
        }
        ?>

    <!---js リンク先のID指定-->
        <link rel="stylesheet" type="text/css"
            href="style.css" id="sample">
                <script type="text/javascript">
                    function changesytle(cssid,cssfile) {
                        document.getElementById(cssid).href = cssfile;
}
                </script>
<!--CSSファイルを切り替えと表示するためのプルダウンメニューを記述します。-->

    </head>


    <body>
    <div class="main">

                <h1><center>お問い合わせ</center></h1>
                <!--送り先の指定-->
            <form action="result.php" method="post"><div class="bar">

                <!--CSSファイルを切り替えと表示するためのプルダウンメニューを記述します。-->
        <select class=change name=linka onchange="changesytle('sample',value);">
                    <option   value="sample.css">水色</option>
                    <option   value="sample1.css">きみどり</option>
                    <option   value="sample2.css">ピンク</option>
                </select>
<!--名前の入力、入力内容の制限-->
<?php
    if(empty($_POST['name1'])===false){
$name1 = $_POST['name1'];
echo " <dt><li>姓　　　　<font size='3' color= '#ff0000'>必須</font></li></dt><dd><input required wrap='hard' type = 'textbox' value='$name1'
name='name1'placeholder='例）OST' pattern='^[a-zA-Zａ-ｚＡ-Ｚァ-ンぁ-ん一-龥]+$' size='25'></dd>";
}else{
echo    " <dt><li>姓　　　　<font size='3' color= '#ff0000'>必須</font></li></dt><dd><input required  wrap='hard' type = 'textbox'
 name='name1'placeholder='例）OST' pattern='^[a-zA-Zａ-ｚＡ-Ｚァ-ンぁ-ん一-龥]+$' size='25'></dd>";
}
if(empty($_POST['name2'])===false){
    $name2 = $_POST['name2'];
    echo   " <dt><li>名　　　　<font size='3' color= '#ff0000'>必須</font></li></dt><dd><input required type = 'textbox' value='$name2'
    name='name2'placeholder='例）太郎' pattern='^[a-zA-Zａ-ｚＡ-Ｚァ-ンぁ-ん一-龥]+$'  size='25'></dd>";
}else{
    echo  " <dt><li>名　　　　<font size='3' color='#ff0000'>必須</font></li></dt><dd><input required  type = 'textbox'
    name='name2' placeholder='例）太郎' pattern='^[a-zA-Zａ-ｚＡ-Ｚァ-ンぁ-ん一-龥]+$'  size='25'></dd>";
                }
?>
    </div>

        <div class="br">
　   <!--//性別-->
<br>
          <dt><li>性別</li></dt>
            <dd><input   type = "radio" name="rdo" value =0 checked >不明
                    <input type = "radio" name="rdo" value =1 >男
                    <input type = "radio" name="rdo" value =2 >女</dd>
    <!--//住所-->
    <?php
    if(empty($_POST['address'])===false){
     $address = $_POST['address'];
                echo "<dt><li>住所　　　<font size='3' color='#ff0000'>必須</font></li></dt><dd><input  required type = 'textbox' value='$address' name='address'  placeholder='例）東京都'　pattern='^[a-zA-Z0-9ａ-ｚＡ-Ｚァ-ンぁ-ん一-龥]+$'
              size='20'></dd>";
             }else {
                 echo "<dt><li>住所　　　<font size='3' color='#ff0000'>必須</font></li></dt><dd><input  required type = 'textbox' name='address'  placeholder='例）東京都'　pattern='^[a-zA-Z0-9ａ-ｚＡ-Ｚァ-ンぁ-ん一-龥]+$'
          size='20'></dd>";
             }
?>
    <!--//電話番号-->
    <?php
    if(empty($_POST['tell1'])===false){
        $tell1 = $_POST['tell1'];
            echo    "<dt><li>ｔell　　　　<font size='3' color='#ff0000'>必須</font></li></dt><dd><input  type = 'textbox' required placeholder='例）000' size=5 pattern='^[0-9]+$' maxlength='4' value='$tell1' name='tell1'>";
        }else{
            echo    "<dt><li>ｔell　　　　<font size='3' color='#ff0000'>必須</font></li></dt><dd><input type = 'textbox' required placeholder='例）000' size=5 pattern='^[0-9]+$' maxlength='4' name='tell1'>";
        }
        if(empty($_POST['tell2'])===false){
            $tell2 = $_POST['tell2'];
                echo   " - <input  type = 'textbox' required placeholder='例）000' size=5 pattern='^[0-9]+$'  value='$tell2' maxlength='4' name='tell2'>";
                }else{
                    echo   " - <input  type = 'textbox' required placeholder='例）000' size=5 pattern='^[0-9]+$' maxlength='4' name='tell2'>";
}
if(empty($_POST['tell3'])===false){
    $tell3 = $_POST['tell3'];
        echo   " - <input  type = 'textbox' required placeholder='例）000' size=5 pattern='^[0-9]+$'  value='$tell3' maxlength='4' name='tell3'></dd>";
        }else{
            echo    " - <input  type = 'textbox' required placeholder='例）000' size=5 pattern='^[0-9]+$' maxlength='4' name='tell3'></dd>";
}

?>
    <!--//アドレス-->
    <?php
    if(empty($_POST['mail1'])===false){
            $mail1 = $_POST['mail1'];
        echo        " <dt><li>e-mail　　<font size='3' color='#ff0000'>必須</font></li></dt><dd><input required type = 'text'  value='$mail1'  name='mail1' placeholder='例）aaaaaaaaa'pattern='^[0-9A-Za-z._-]+$'  size='20'> @";
    }else{
        echo        " <dt><li>e-mail　　<font size='3' color='#ff0000'>必須</font></li></dt><dd><input required type = 'text'    name='mail1' placeholder='例）aaaaaaaaa'pattern='^[0-9A-Za-z._-]+$'size='20'> @";
    }
if(empty($_POST['mail2'])===false){
    $mail2 = $_POST['mail2'];
        echo           " <input required type = 'text'value='$mail2' name='mail2' placeholder='例）ostechnology.co.jp' pattern='^[0-9A-Za-z.-]+$' pattern ='^(?!.*<\s).+$' size='20'></dd>";
    }else{
                echo           " <input required type = 'text' name='mail2' placeholder='例）ostechnology.co.jp' pattern='^[0-9A-Za-z.-]+$' pattern ='^(?!.*<\s).+$' size='20'></dd>";
        }
?>
            </div>
    <!--サイトをどこで知ったか-->
    <div class="bar">
        <li>こちらのサイトをどこで知りましたか？</li>
            <inp>
                <input type="hidden" name="where" value="0">
                <input type="checkbox" name="where[]" value="1" >インターネット
                <input type="checkbox" name="where[]" value="2">CM
                <input type="checkbox" name="where[]" value="3">チラシ
                <input type="checkbox" name="where[]" value="4">知人の紹介
            </inp>
<!--質問の内容-->
        <li>質問の内容について選択ください</li>
            <select name="question">
                <option value="0">お仕事の依頼について</option>
                <option value="1">製品の購入について</option>
                <option value="2">製品について</option>
                <option value="3">採用について</option>
            </select>

    <!--質問の内容について-->
        <li>質問の内容についてご記入ください　　　　　<font size="3" color="#ff0000">必須</font></li>
        <?php
if(empty($_POST['inquiry'])===false){
    $inquiry = $_POST['inquiry'];
        echo   " <textarea required  wrap='hard' pattern='(?!/s).+$'  name='inquiry' rows='10' cols='65' placeholder='ここにお問い合せ内容を記入してください。'>$inquiry</textarea>";
    }else{
        echo   " <textarea required  wrap='hard' pattern='(?!/s).+$' name='inquiry' rows='10' cols='65' placeholder='ここにお問い合せ内容を記入してください。'></textarea>";
    }
?>
<!--戻る、リセットボタン-->
            <center><input type ="submit" style="width:200px; height:50px" >
　           <input type="button"　 style="width:200px; height:50px" onclick="location.href='./contact.php'"value="リセット"></center>
               </form>

</div>


</html>
