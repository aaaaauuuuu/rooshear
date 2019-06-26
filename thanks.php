<?php

// session_start();

// $nickname = htmlspecialchars($_POST['nickname']);
// $age = htmlspecialchars($_POST['age']);
// $password = htmlspecialchars($_POST['password']);
// $email = htmlspecialchars($_POST['email']);
// $gender = htmlspecialchars($_POST['gender']);
// $img = $_SESSION('img');

// // 新規作成のデータベース名
// $dsn = 'mysql:dbname=XXX;host=localhost';
// $user = 'XXX';
// $password ='';

// // データベースに接続している部分
// $dbh = new PDO($dsn. $user, $password);

// // エラーを画面にだす設定
// $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// // DBを操作するときの文字コードを設定
// $dbh->query('SET NAMES utf8');

// // SQL文を作成
// $sql = 'INSERT INTO XX(nickname, img, age, gender, email) VALUES(:nickname, :img, :age, :gender, :email,)';

// // 作成したSQL文を実行準備
// $stmt = $dbh->prepare($sql);
// $stmt->bindparam(':nickname', $nickname, PDO::PARAM_STR);
// $stmt->bindparam(':age', $age, PDO::PARAM_STR);
// $stmt->bindparam(':password', $password, PDO::PARAM_STR);
// $stmt->bindparam(':email', $email, PDO::PARAM_STR);
// $stmt->bindparam(':gender', $gender, PDO::PARAM_STR);
// $stmt->bindparam(':img', $img, PDO::PARAM_STR);

// // SQLの実行
// $stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>送信完了</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="./thanks.css">

</head>
<body>

    <!-- headerここから -->
    <header class="header">
        <p class="left">Roo Share</p>
        <div class="header-right">
            <a href=".././search_page/search.html"><div class="icons">
                <i class="fas fa-search"></i>
                <p>Search</p>
            </div></a>
            <a href="#"><div class="icons">
                <i class="fas fa-home"></i>
                <p>Myhome</p>
            </div></a>
            <a href="#"><div class="icons">
                <i class="far fa-smile-beam"></i>
                <p>New post</p>
            </div></a>
            <a href="#"><div class="icons">
                <i class="fas fa-map-marked-alt"></i>
                <p>Map</p>
            </div></a>
        </div>
    </header>
    <!-- headerここまで -->

    <div class="container">
        <p class="thy">Thank you<i class="thy far fa-smile-beam"></i></p>
    <div class="img"><img src="data:image/png;base64,<?= $base64; ?>" alt=""></div>
    <div class="form">
    <div class="title">ニックネーム</div><div class="result"><?= $nickneme ?></div>
    </div>

    <div class="form">
    <div class="title">パスワード</div><div class="result"><?= $password ?></div>
    </div>

    <div class="form">
    <div class="title">Eメールアドレス</div><div class="result"><?= $email ?></div>
    </div>

    <div class="form">
    <div class="title">性別</div><div class="result"><?= $gender ?></div>
    </div>

    <div class="form">
    <div class="title">年齢</div><div class="result"><?= $age ?></div>
    </div>

    </div>

</body>
</html>