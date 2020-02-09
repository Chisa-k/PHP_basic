<?php
$omikuji = array('大吉', '吉', '中吉', '小吉', '末吉', '凶');
$today = rand(0, count($omikuji) - 1);
$result = $omikuji[$today];

$messege = array('super happy', 'super lucky', 'smile');
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
        <p><button type="button" class="btn btn-outline-primary"><a href="<?php echo $_SERVER["SCRIPT_NAME"]; ?>">おみくじをもう一度引く</a></button></p>
    </div>
</body>

</html>