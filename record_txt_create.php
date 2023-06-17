<?php

// var_dump($_POST);
// exit();

$input_date = $_POST["input_date"];
$memo = $_POST["memo"];

// echo $input_date;
// echo $memo;


// データ1件を1行にまとめる（最後に改行を入れる）
$record_data = "{$input_date}　{$memo}\n";

// ①ファイルを開く
//引数を"a"にすると、ファイルがないと新規作成、あれば開く
$file = fopen("data/record.txt", "a");

// ②ファイルをロックする
flock($file, LOCK_EX);

// 指定したファイルに指定したデータを書き込む
fwrite($file, $record_data);

// ファイルのロックを解除する
flock($file, LOCK_UN);

// ファイルを閉じる
fclose($file);

// データ入力画面に移動する
header("Location:user_page.php");
