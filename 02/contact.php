<!DOCTYP html>
<html >
<head>
    <meta charset = "utf-8">
    <title>質問フォーム</title>
    <LINK rel="stylesheet" type="text/css" href="sample.css">
</head>


<body>
    <div class="main">


    <!-- 名前-->
<h1><center>お問い合わせ</center></h1>
<form action="result.php" method="post">
<u1>
<h2><li>性：<input type = "textbox" name="name1" size="20"></li>
<li>名：<input type = "textbox" name="name2" size="20"></li>
　   <!--//性別-->
<li>性別：<input  type = "radio" name="rdo" value =0 checked >不明
<input type = "radio" name="rdo" value =1 >男
<input type = "radio" name="rdo" value =2 >女</li>
    <!--//住所-->
<li>住所：<input type = "textbox" name="address" size="20"></li>
    <!--//電話番号-->
<li>電話番号：<input type = "textbox" name="tell1" size="20">
-<input type = "textbox" name="tell2" size="20">
-<input type = "textbox" name="tell3" size="20"></li>
    <!--//アドレス-->
<li>E-mail:<input type = "textbox" name="mail1" size="20">@<input type = "textbox" name="mail2" size="20"></li>

</ul>
<u1>
    <!--サイトをどこで知ったか-->
<p><li>こちらのサイトをどこで知りましたか？</li>
<input type="hidden" name="where" value="0">
<input type="checkbox" name="where[]" value="インターネット" >インターネット
<input type="checkbox" name="where[]" value="CM">CM
<input type="checkbox" name="where[]" value="チラシ">チラシ
<input type="checkbox" name="where[]" value="知人の紹介">知人の紹介
</p>
<!--質問の内容-->
<p><li>質問の内容について選択ください</li>
    <select name="question">
        <option value="お仕事の依頼について">お仕事の依頼について</option>
<option value="製品の購入について">製品の購入について</option>
<option value="製品について">製品について</option>
<option value="採用について">採用について</option>
        </select>
    </p>
    <!--質問の内容について-->
    <p><li>質問の内容についてご記入ください</li>
        <textarea name="inquiry" rows="10" cols="111" placeholder="ここにお問い合せ内容を記入してください。"></textarea>
        <br>
    </p>
</u1></h2>
<input type ="submit">
</form>
</div>
</body>

</html>
