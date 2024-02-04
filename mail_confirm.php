<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お問合せフォームを作る</title>
    <limk rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>お問い合わせ内容確認</h1>
    <div class="confirm">
        <p>お問い合わせ内容はこちらで宜しいでしょうか？
            <br>よろしければ「送信する」ボタンを押して下さい。
        </p>
        <p>名前
            <br>
            <?php echo $_POST['name'];?>
        </p>
        <p>メールアドレス
            <br>
            <?php echo $_POST['mail'];?>
        </p>
        <p>年齢
            <br>
            <?php echo $_POST['age'];?>
        </p>
        <p>コメント
            <br>
            <?php echo $_POST['comments'];?>
        </p>

        <div class = "buttons">
            <form action = "index.html">
                <imput type = "submit" class = "button1" value = "戻って修正する" />
            </form>
            <form action = "insert.php">
                <imput type = "submit" class = "button2" value = "登録する" />
                <imput type = "hidden" value = "<?php echo $_POST['name']; ?>" name = "name">
                <imput type = "hidden" value = "<?php echo $_POST['mail']; ?>" name = "mail">
                <imput type = "hidden" value = "<?php echo $_POST['age']; ?>" name = "age">
                <imput type = "hidden" value = "<?php echo $_POST['comments']; ?>" name = "comments">
            </form>
        </div>
    </div>
</body>
</html>