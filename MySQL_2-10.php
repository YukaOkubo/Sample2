<?php

$dsn = 'mysql:dbname=�f�[�^�x�[�X��;host=localhost';
$user = '���[�U�[��';
$password = '�p�X���[�h';
$pdo = new PDO($dsn,$user,$password);

$sql='show create table tablename';

$result = $pdo->query($sql);

foreach ($result as $row){
	echo $row[0];
	echo '<br>';
}
print('<p>�e�[�u���̒��g�̈ꗗ���\������܂����B</p>');

?>