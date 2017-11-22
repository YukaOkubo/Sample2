<?php

$dsn = 'mysql:dbname=データベース名;host=localhost';
$user = 'ユーザー名';
$password = 'パスワード';
$pdo = new PDO($dsn,$user,$password);

$sql = "INSERT INTO tablename (number, name, comment) VALUES (:number, :name, :comment)";
$result = $pdo->prepare($sql);
$data = array(':number' => '1',':name' => 'aaa', ':comment'=>'HelloWorld');
$result ->execute($data);
print('<p>データを挿入しました。</p>');
?>