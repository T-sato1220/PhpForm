<Center>
<form action="result.php" method="post">

性:<input type = "textbox" name="name1" size="20">
<br>
名:<input type = "textbox" name="name2" size="20">
<br>
性別：<input  type = "radio" name="rdo" value =0 checked >不明
<input type = "radio" name="rdo" value =1 >男
<input type = "radio" name="rdo" value =2 >女
<br>
住所:<input type = "textbox" name="address" size="20">
<br>
電話番号：<input type = "textbox" name="tell1" size="20">
-<input type = "textbox" name="tell2" size="20">
-<input type = "textbox" name="tell3" size="20">

<br>
E-mail:<input type = "textbox" name="mail1" size="20">
@<input type = "textbox" name="mail2" size="20">
<br>
こちらのサイトをどこで知りましたか？ <br>
<input type="hidden" name="where" value="0">
<input type="checkbox" name="where[]" value="インターネット" >インターネット
<input type="checkbox" name="where[]" value="CM">CM
<input type="checkbox" name="where[]" value="チラシ">チラシ
<input type="checkbox" name="where[]" value="知人の紹介">知人の紹介
    <br>
    <select name="question">
        <option value="お仕事の依頼について">お仕事の依頼について</option>
<option value="製品の購入について">製品の購入について</option>
<option value="製品について">製品について</option>
<option value="採用について">採用について</option>
        </select>
        <br>
        <textarea name="inquiry" rows="10" cols="40" placeholder="ここにお問い合せ内容を記入してください。"></textarea>
        <br>
<input type ="submit">
</form>
</Center>
