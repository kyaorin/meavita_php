<?php

// データまとめ用の空文字変数
$str = "";

// ①ファイルを開く（読み取り専用）
//引数を"r"にすると、読み込みのみで開く
$file = fopen("data/record.txt", "r");

// ②ファイルをロック
flock($file, LOCK_EX);

//条件分岐をして、ファイルが開いているのを確認してから
//fgets()で1行ずつ取得→$lineに格納
if ($file) {
    while ($line = fgets($file)) {
        // 取得したデータを`$str`に追加する
        $str .= "<tr><td>{$line}</td></tr>";
    }
}

// ロックを解除する
flock($file, LOCK_UN);

// ファイルを閉じる
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>今日の記録一覧</title>
</head>

<body>

    <h2>今日の記録一覧</h2>
    <fieldset>
        <legend><a href="user_page.php">入力画面に戻る</a></legend>

        <table>
            <thead>
                <tr>
                    <th>毎週、毎月の振り返りをしてみよう</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th><?= $str ?></th>
                </tr>
            </tbody>
        </table>
    </fieldset>
</body>

</html>