<?php

session_start();

$nickname = htmlspecialchars($_POST['nickname']);
$password = htmlspecialchars($_POST['password']);
$email = htmlspecialchars($_POST['email']);
$gender = htmlspecialchars($_POST['gender']);
$age = htmlspecialchars($_POST['age']);

// ニックネーム
if($nickname != ''){
    $nickneme_result = $nickname .'<br>';
} else {
    $nickneme_result = 'ニックネームの入力がされておりません。' .'<br>';
}

// password
if($password != ''){
    $password_result = $password .'<br>';
} else {
    $password_result = 'パスワードの入力がありません。' .'<br>';
}

// email
if($email != ''){
    $email_result = $email .'<br>';
} else {
    $email_result = 'Eメールアドレスの入力がありません。' .'<br>';
}

// 性別
if($gender == '男性'){
    $gender_result = $gender .'<br>';
    $genderValue = 1;
} else if($gender == '女性') {
    $gender_result = $gender .'<br>';
    $genderValue = 2;
} else {
    $gender_result = '性別の選択がされておりません。' .'<br>';
    $genderValue = 3;
}

// age
if($age < 20) {
    $age_result = '20歳未満' .'<br>';
    $ageValue = 0;
} elseif ($age >= 20 && $age < 30){
    $age_result = '20-29歳' .'<br>';
    $ageValue = 1;
} elseif ($age >= 30 && $age < 40){
    $age_result = '30-39歳' .'<br>';
    $ageValue = 2;
} elseif ($age >= 40 && $age < 50){
    $age_result = '40-49歳' .'<br>';
    $ageValue = 3;
} elseif ($age >= 50 && $age < 50){
    $age_result = '50-59歳' .'<br>';
    $ageValue = 4;
}

// プロフィール画像
//アップロードされた画像を取得

$img = file_get_contents($_FILES["file"]["tmp_name"]);

// セッションにも格納
$_SESSION['img'] = $img;
// BASE64エンコード
$base64 = base64_encode($img);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>入力確認画面</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./check.css">

</head>
<body>

    <form action="./thanks.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="nickname" value="<?=nickname; ?>">
        <input type="hidden" name="password" value="<?=nickname; ?>">
        <input type="hidden" name="email" value="<?=nickname; ?>">
        <input type="hidden" name="gender" value="<?=nickname; ?>">
        <input type="hidden" name="age" value="<?=nickname; ?>">


    <!-- headerここから -->
    <header class="header">
        <p class="left">Roo Share</p>
    </header>
    <!-- headerここまで -->

    <div class="container">
        <p>新規登録入力確認<i class="fas fa-pencil-alt"></i></p>
    <div class="img"><img src="data:image/png;base64,<?= $base64; ?>" alt=""></div>
    <div class="form">
    <div class="title">ニックネーム</div><div class="result"><?= $nickneme_result ?></div>
    </div>

    <div class="form">
    <div class="title">パスワード</div><div class="result"><?= $password_result ?></div>
    </div>

    <div class="form">
    <div class="title">Eメールアドレス</div><div class="result"><?= $email_result ?></div>
    </div>

    <div class="form">
    <div class="title">性別</div><div class="result"><?= $gender_result ?></div>
    </div>

    <div class="form">
    <div class="title">年齢</div><div class="result"><?= $age_result ?></div>
    </div>

    </div>

    <a href="#" class="btn-flat-logo">
        <i class="fa fa-chevron-right"></i> Confirm
    </a>
    </form>

</body>
</html>