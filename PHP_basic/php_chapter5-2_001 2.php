<?php
try {
    $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8', 'root', 'root');
} catch (PDOException $e) {
    echo 'DB接続エラー: ' . $e->getMessage();
}
$count = $db->exec('INSERT INTO my_items SET maker_id=1,
item_name="もも",price=210,keyword="缶詰,ピンク,甘い",sales=0, created="2018-01-23",modified="2018-01-23"');
echo $count . '件のデータを挿入しました';

//$count = $db->exec('UPDATE my_items SET item_name="もも" WHERE id=8');
//echo $count . '件変更しました';

//$count = $db->exec('DELETE FROM my_items WHERE id=8');
//echo $count . '件削除しました';
