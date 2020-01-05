<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../../../css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
</header>

<main>
<h2>データの一覧画面を作る</h2>
<?php
try {
    $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8', 'root', 'root');
} catch (PDOException $e) {
    echo 'DB接続エラー： ' . $e->getMessage();
}

$memos = $db->query('SELECT * FROM memos ORDER BY id DESC');
?>
<article>
<?php while ($memo = $memos->fetch()): ?>
  <?php if ((mb_strlen($memo['memo']))> 3): ?>
    <p><a href="memo.php?id=<?php print($memo['id']); ?>"> <?php print(mb_substr($memo['memo'], 0, 3)); ?>...</a></p>
  <?php else: ?>
    <p><a href="memo.php?id=<?php print($memo['id']); ?>"> <?php print($memo['memo']); ?></a></p>
  <?php endif; ?>
<time><?php print($memo['created_at']); ?></time>
<hr>
<?php endwhile; ?>
</article>
</main>
</body>
</html>
