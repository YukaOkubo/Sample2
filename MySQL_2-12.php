<?php

$dsn = 'mysql:dbname=�f�[�^�x�[�X��;host=localhost';
$user = '���[�U�[��';
$password = '�p�X���[�h';
$pdo = new PDO($dsn,$user,$password);

$sql = 'SELECT * FROM tablename';
$result =$pdo->query($sql);

foreach ($result as $row){
	echo $row['number'].',';
	echo $row['name'].',';
	echo $row['comment'].'<br>';
}
print('<p>�f�[�^��\�����܂����B</p>');
?>