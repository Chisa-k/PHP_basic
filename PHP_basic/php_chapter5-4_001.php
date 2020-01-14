<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">


<h2>Practice</h2>
<pre>
            <?php
            try {
                $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8', 'root', 'root');
                $db->exec('INSERT INTO memos SET memo="' . $_POST['memo'] . '", created_at=NOW()');
            } catch (PDOException $e) {
                echo 'DB接続エラー: ' . $e->getMessage();
            }
            $statement = $db->prepare('INSERT INTO memos SET memo=?,created_at=NOW()');
            $statement->execute(array($_POST['memo']));
            echo 'メッセージが登録されました';
            ?>
</pre>