<?php


//$dsn = 'mysql:dbname=�f�[�^�x�[�X��;host=localhost';
//$user = '���[�U�[��';
//$password = '�p�X���[�h';
//$pdo = new PDO($dsn,$user,$password);
$dbname='�f�[�^�x�[�X��';
$db = mysql_connect('localhost', '���[�U�[��', '�p�X���[�h');
if (!$db) {
    die('�ڑ����s�ł��B'.mysql_error());
}

print('<p>�ڑ��ɐ������܂����B</p>');



$db_selected = mysql_select_db('�f�[�^�x�[�X��',$db );
if (!$db_selected){
    die('�f�[�^�x�[�X�I�����s�ł��B'.mysql_error());
}


print('<p>�f�[�^�x�[�X�I���ɐ������܂����B</p>');


$sql="CREATE TABLE `tablename`"
."("
."`number` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,"
."`name` VARCHAR(50) NOT NULL,"
."`comment` VARCHAR(50) NOT NULL"
.");";
$rs=mysql_query($sql)or die(mysql_error());
//echo "ok";


/*$dsn = 'mysql:dbname=�f�[�^�x�[�X��;host=localhost';
$user = '���[�U�[��';
$password = '�p�X���[�h';
$pdo = new PDO($dsn,$user,$password);

$sql2="SHOW TABLES";

$result=$pdo->query($sql2);
foreach ($rs2 as $row2){
echo $row2[0];
echo '<br>';
}
or die(mysql_error());
print('<p>�e�[�u���ꗗ���\������܂����B</p>');

$dsn = 'mysql:dbname=�f�[�^�x�[�X��;host=localhost';
$user = '���[�U�[��';
$password = '�p�X���[�h';
$pdo = new PDO($dsn,$user,$password);

$sql2 = 'show create table tablename';

$result2=$pdo->query($sql2);
foreach ($result2 as $row2){
	print('No.='.$row2[0]);
	echo '<br>';
}

//print('<p>');
//print('No.='.$row2['number']);
//print('name='.$row2['name']);
//print('comment='.$row2['comment']);
//print('</p>');
//}

//$close_flag = mysql_close($db);

//if ($close_flag){
//    print('<p>�ؒf�ɐ������܂����B</p>');
//}

*/
?>