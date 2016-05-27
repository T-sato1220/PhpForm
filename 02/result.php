<!DOCTYP html>
<html >
    <head>
        <meta charset = "utf-8">
        <title>出力フォーム</title>

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

    </head>
    <body>
        <div class="main2">

            <h1><center>お問い合わせ完了</center></h1>
            <div class="bar"><div class="a">
            <?php
            $cname1=count($_POST['name1']);
            $cname2=count($_POST['name2']);
            if($cname1>0 && $cname2>0){
            echo "名前：".$_POST['name1']." ".$_POST['name2']."<br>";
            }else{
                    echo "名前：未記入<br>";
        }
            ?>
        </div>
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
        $address=count($_POST['address']);
        if($address>0){
            echo "住所：".$_POST['address']."<br>";
        }else{
            echo "住所：未記入<br>";
        }
        ?></div>
        <div class="b"><?php
        $fst1 = (string) $_POST['tell1'];
        $tell1 = count($fst1);
        $fst2 = (string) $_POST['tell2'];
        $tell2 = count($fst2);
        $fst3 = (string) $_POST['tell3'];
        $tell3 = count($fst3);
        if($tell1>0 && $tell2>0 && $tell3>0){
        echo "電話番号：".$_POST['tell1']."-".$_POST['tell2']."-".$_POST['tell3']."<br>";
    }else{
        echo "電話番号：未記入<br>";
    }
        ?></div>
        <div class="a"><?php
                $fs1 = (string) $_POST['mail1'];

            $mail1=count($fs1);
            $fs2 = (string) $_POST['mail2'];
                $mail2=count($fs2);
        if($mail1>0 && $mail2>0 ){
        echo "E-mail:".$_POST['mail1']."@".$_POST['mail2']."<br>";
    }else{
        echo "E-mail:未記入";
    }
        ?></div>
        <div class="b"><?php
        echo "知った理由";
        $where  = array("なし","インターネット" ,"CM","チラシ","知人の紹介");
        $aa = $_POST['where'] ;
        $n = count($aa);
        for($i=0;$i<$n; $i++){
            echo "：".$where[$aa[$i]];
        }
        ?></div>
        <div class="a"><?php
        $question = array("お仕事の依頼について", "製品の購入について","製品について","採用について");
        echo "質問項目：".$question[$_POST['question']]."<br>";
        ?>
    </div>
    <div class="b"> <?php
    echo "質問の内容<br>";
    ?></div>
    <div class="c"><?php
    $inquiry=count($_POST['inquiry']);
    if($inquiry>0){
        $bb =nl2br($_POST['inquiry']);
        echo $bb;
    }else{
        echo "未記入";
    }
       ?></br>

    </div>
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
            <form action="contact.php" method="post">
                <?php
                $name1 = $_POST['name1'];
                $name2 = $_POST['name2'];
                $address= $_POST['address'];
                $tell1 = $_POST['tell1'];
                $tell2 = $_POST['tell2'];
                $tell3 = $_POST['tell3'];
                $mail1 = $_POST['mail1'];
                $mail2 = $_POST['mail2'];
                $inquiry = $_POST['inquiry'];
                echo  "<input type='hidden' name='linka' value=  '$linka'>";
                echo  "<input type='hidden' name='name1' value=  '$name1'>";
                echo  "<input type='hidden' name='name2' value=  '$name2'>";
                echo  "<input type='hidden' name='address' value=  '$address'>";
                echo  "<input type='hidden' name='tell1' value=  '$tell1'>";
                echo  "<input type='hidden' name='tell2' value=  '$tell2'>";
                echo  "<input type='hidden' name='tell3' value=  '$tell3'>";
                echo  "<input type='hidden' name='mail1' value=  '$mail1'>";
                echo  "<input type='hidden' name='mail2' value=  '$mail2'>";
                echo  "<input type='hidden' name='inquiry' value=  '$inquiry'>";
                ?>
                <input type ="submit" style="width:200px; height:50px" value="戻る">
            </form>


        </body>

        </html>
