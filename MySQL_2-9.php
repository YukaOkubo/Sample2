<?php

$dsn = 'mysql:dbname=�f�[�^�x�[�X��;host=localhost';
$user = '���[�U�[��';
$password = '�p�X���[�h';
$pdo = new PDO($dsn,$user,$password);

$sql="SHOW TABLES";

$result=$pdo->query($sql);
foreach ($result as $row){
echo $row[0];
echo '<br>';
}
print('<p>�e�[�u���ꗗ���\������܂����B</p>');


/*while ($row = mysql_fetch_row($result)) {
  $sql = 'SELECT * FROM '.$row[0].'';
  $exist_check = mysql_query($link, $sql);
  if ($exist_check) {
    echo "Table: {$row[0]}\n";
    mysql_free_result($exist_check);
  }
}

mysql_free_result($result);
*/
?>