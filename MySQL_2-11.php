<?php

$dsn = 'mysql:dbname=�f�[�^�x�[�X��;host=localhost';
$user = '���[�U�[��';
$password = '�p�X���[�h';
$pdo = new PDO($dsn,$user,$password);

$sql = "INSERT INTO tablename (number, name, comment) VALUES (:number, :name, :comment)";
$result = $pdo->prepare($sql);
$data = array(':number' => '1',':name' => 'aaa', ':comment'=>'HelloWorld');
$result ->execute($data);
print('<p>�f�[�^��}�����܂����B</p>');
?>