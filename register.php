<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>会員登録ページ</title>
</head>


<body>
    <div class="register_wrapper">
        <div class="register_title">
            <h2>ミアビータ無料会員登録ページ</h2>
            <p>下記内容をご登録いただきますと、会員限定コンテンツがご利用いただけます。</p>
        </div>
        <form method="POST" action="user_page.php" class="qa_wrapper">
            <div>
                <p class="q_text">Name</p>
                <input class="textarea" type="text" id="name" name="name">
            </div>
            <div>
                <p class="q_text">Email</p>
                <input class="textarea" type="text" id="email" name="email">
            </div>
            <div>
                <p class="q_text">年代</p>
                <label class="question">
                    <select id="age" name="age">
                        <option value="40代前半">40代前半</option>
                        <option value="40代後半">40代後半</option>
                        <option value="30代前半">30代前半</option>
                        <option value="30代後半">30代後半</option>
                        <option value="50代前半">50代前半</option>
                        <option value="50代後半">50代後半</option>
                        <option value="20代">20代</option>
                    </select>
                </label>
            </div>
            <div>
                <p class="q_text">職業</p>
                <label class="question">
                    <select id="profession" name="profession">
                        <option value="正社員">正社員</option>
                        <option value="自営業">自営業</option>
                        <option value="パラレルキャリア">パラレルキャリア</option>
                        <option value="派遣社員">派遣社員</option>
                        <option value="パート・アルバイト">パート・アルバイト</option>
                        <option value="専業主婦（主夫）">専業主婦（主夫）</option>
                        <option value="その他">その他</option>
                    </select>
                </label>
            </div>
            <div>
                <p class="q_text">お子様の有無</p>
                <label class="question">
                    <select id="child" name="child">
                        <option value="いる">いる</option>
                        <option value="いない">いない</option>
                    </select>
                </label>
            </div>
            <div>
                <p class="q_text">ミアビータを何で知りましたか？</p>
                <label class="question">
                    <select id="find" name="find">
                        <option value="Voicy">Voicy</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Twitter">Twitter</option>
                        <option value="ネット検索">ネット検索</option>
                        <option value="メディア">メディア</option>
                        <option value="イベント">イベント</option>
                        <option value="紹介">紹介</option>
                        <option value="その他">その他</option>
                    </select>
                </label>
            </div>

            <div>
                <p class="q_text">今一番、解決したいキャリアのお悩みは何ですか？</p>
                <label class="question">
                    <select id="worry" name="worry">
                        <option value="仕事にやりがいを感じられない">仕事にやりがいを感じられない</option>
                        <option value="自分の才能や強みを知りたい">自分の才能や強みを知りたい</option>
                        <option value="ブレない価値観や自分軸をみつけたい">ブレない価値観や自分軸をみつけたい</option>
                        <option value="転職をしたい">転職をしたい</option>
                        <option value="起業・複業をしたい">起業・複業をしたい</option>
                        <option value="収入の柱を増やしたい">収入の柱を増やしたい</option>
                        <option value="仕事と子育ての両立に悩んでいる">仕事と子育ての両立に悩んでいる</option>
                    </select>
                </label>
            </div>
            <div>
                <p class="q_text">そのキャリアの悩みをいつまでに解決したいですか？</p>
                <label class="question">
                    <select id="limit" name="limit">
                        <option value="今すぐにでも解決したい">今すぐにでも解決したい</option>
                        <option value="半年以内に解決したい">半年以内に解決したい</option>
                        <option value="１年以内に解決したい">１年以内に解決したい</option>
                        <option value="2〜3年以内に解決したい">2〜3年以内に解決したい</option>
                    </select>
                </label>
            </div>
            <div>
                <p class="q_text">ミアビータについて当てはまるものはどれですか？</p>
                <label class="question">
                    <select id="service" name="service">
                        <option value="専門家に個別相談したい">専門家に個別相談したい</option>
                        <option value="コミュニティに参加したい">コミュニティに参加したい</option>
                        <option value="キャリアスクールを利用したい">キャリアスクールを利用したい</option>
                        <option value="利用したいが迷っている">利用したいが迷っている</option>
                        <option value="利用するつもりはない">利用するつもりはない</option>
                    </select>
                </label>
            </div>
            <button type="submit" id="send" class="send">登録</button>
        </form>