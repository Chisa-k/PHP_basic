<?php
$omikuji = array('大吉', '吉', '中吉', '小吉', '末吉', '凶');
$today = rand(0, count($omikuji) - 1);
$result = $omikuji[$today];

$messege = array('aaa', 'bbb', 'ccc');
$todaymessege = rand(0, count($messege) - 1);
$messege_02 = $messege[$todaymessege];
?>

<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta content="width=decive-width, initial-scale=1.0" name="viewport" />
    <title>今日のおみくじ</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
</head>

<body>
    <div class="wf-roundedmplus1c">
        <div class="wf-nicomoji">
            <h1>きょうのおみくじ</h1>
        </div>

        <p>今日のあなたの運勢は、<span>【<?php echo $result; ?>】</span>です！</p>
        <p>★messege</p>
        <p>「　<?php echo $messege_02; ?>　」</p>
        <p>今日も一日がんばりましょう！</p>

    </div>
</body>

</html>