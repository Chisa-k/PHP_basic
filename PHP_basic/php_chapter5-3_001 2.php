<?php
try {
    $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8', 'root', 'root');
} catch (PDOException $e) {
    echo 'DB接続エラー: ' . $e->getMessage();
}
$records = $db->query('SELECT * FROM my_items');
while ($record = $records->fetch()) {
    print($record{
        'item_name'} . "\n");
}

//$records = $db->query('SELECT COUNT (*) AS record_count FROM my_items');
//$record = $records->fetch();
//print('件数は、' . $record['record_count'] . '件です。');
