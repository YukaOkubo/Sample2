<?php

$dsn = 'mysql:dbname=データベース名;host=localhost';
$user = 'ユーザー名';
$password = 'パスワード';
$pdo = new PDO($dsn,$user,$password);

$sql='show create table tablename';

$result = $pdo->query($sql);

foreach ($result as $row){
	echo $row[0];
	echo '<br>';
}
print('<p>テーブルの中身の一覧が表示されました。</p>');

?>