<?php

session_start();
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$age = $_SESSION["age"];
$profession = $_SESSION["profession"];
$child = $_SESSION["child"];
$find = $_SESSION["find"];
$worry = $_SESSION["worry"];
$limit = $_SESSION["limit"];
$service = $_SESSION["service"];


// echo $name;
// echo $email;
// echo $age;
// echo $profession;
// echo $child;
// echo $find;
// echo $worry;
// echo $limit;
// echo $service;

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>会員情報</title>
</head>

<body>

    <div class=user_info_1>
        <img class=user_icon src="img/user_icon.png" alt="会員アイコン">
        <h2><?= $name ?></h2>
        <h3><?= $email ?></h3>
        <p>年代：<?= $age ?>　/ 職業：<?= $profession ?>　/ お子様：<?= $child ?></p>
        <p class="q_text">ミアビータを知ったきっかけ / <?= $find ?></p>
        <p class="q_text">今一番、解決したいキャリアのお悩み / <?= $worry ?></p>
        <p class="q_text">いつまでにキャリアを解決したいか / <?= $limit ?></p>
        <p class="q_text">ミアビータについて / <?= $service ?></p>
    </div>

    <button class="return_btn" id="return_btn">会員ページに戻る</button>

    <script>
        $("#return_btn").on("click", function() {
            location.href = "user_page.php";
        });
    </script>
</body>

</html>