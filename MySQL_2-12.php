<?php

$dsn = 'mysql:dbname=データベース名;host=localhost';
$user = 'ユーザー名';
$password = 'パスワード';
$pdo = new PDO($dsn,$user,$password);

$sql = 'SELECT * FROM tablename';
$result =$pdo->query($sql);

foreach ($result as $row){
	echo $row['number'].',';
	echo $row['name'].',';
	echo $row['comment'].'<br>';
}
print('<p>データを表示しました。</p>');
?>