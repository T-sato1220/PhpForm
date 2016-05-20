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
<h2><dt><li>性</li></dt><dd><input required type = "textbox" name="name1" size="20"></dd>
<dt><li>名：</li></dt><dd><input  required type = "textbox" name="name2" size="20"><dd></h2>
　   <!--//性別-->
<h2><dt><li>性別</li></dt><dd><input   type = "radio" name="rdo" value =0 checked >不明
<input type = "radio" name="rdo" value =1 >男
<input type = "radio" name="rdo" value =2 >女</dd>
    <!--//住所-->
<dt><li>住所</li></dt><dd><input  required type = "textbox" name="address" size="20"></dd>
    <!--//電話番号-->
<dt><li>電話番号</li></dt><dd><input required type = "number"  min="0" max="9999" step="1" style="width:100px" name="tell1">
- <input required type = "number" min="0" max="9999" step="1" style="width:100px" name="tell2">
- <input required type = "number"min="0" max="9999" step="1" style="width:100px"  name="tell3" size="10"></dd>
    <!--//アドレス-->
<dt><li>E-mail</li></dt><dd><input required type = "text"    name="mail1" pattern="^[0-9A-Za-z]+$" size="20"> @
    <input required type = "text" name="mail2"  pattern="^[0-9A-Za-z]+$" size="20"></dd>
</h2>

<u1>
    <!--サイトをどこで知ったか-->
    <h3>
<p><li>こちらのサイトをどこで知りましたか？</li>
    <inp>
<input type="hidden" name="where" value="0">
<input type="checkbox" name="where[]" value="1" >インターネット
<input type="checkbox" name="where[]" value="2">CM
<input type="checkbox" name="where[]" value="3">チラシ
<input type="checkbox" name="where[]" value="4">知人の紹介
</inp>
</p>
<!--質問の内容-->
<p><li>質問の内容について選択ください</li>
    <select name="question">
        <option value="0">お仕事の依頼について</option>
<option value="1">製品の購入について</option>
<option value="2">製品について</option>
<option value="3">採用について</option>
        </select>
    </p>
    <!--質問の内容について-->
    <p><li>質問の内容についてご記入ください</li>
        <textarea required name="inquiry" rows="10" cols="100" placeholder="ここにお問い合せ内容を記入してください。"></textarea>
</textarea>
        <br>
    </p>
</h3>
</u1>
<inp2><input type ="submit" style="width:200px; height:50px"></inp2>
</form>
</div>
</body>

</html>
