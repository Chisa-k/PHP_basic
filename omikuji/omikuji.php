<?php
$omikuji = array('大吉', '中吉', '小吉', '吉', '凶', '大凶');
$today = rand(0, count($omikuji) - 1);
$result = $omikuji[$today];
?>

<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta content="width=decive-width, initial-scale=1.0" name="viewport" />
    <title>今日の運勢おみくじ</title>
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

        <p>今日も一日がんばりましょう！</p>

    </div>
</body>

</html>