<?php


//$dsn = 'mysql:dbname=データベース名;host=localhost';
//$user = 'ユーザー名';
//$password = 'パスワード';
//$pdo = new PDO($dsn,$user,$password);
$dbname='データベース名';
$db = mysql_connect('localhost', 'ユーザー名', 'パスワード');
if (!$db) {
    die('接続失敗です。'.mysql_error());
}

print('<p>接続に成功しました。</p>');



$db_selected = mysql_select_db('データベース名',$db );
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}


print('<p>データベース選択に成功しました。</p>');


$sql="CREATE TABLE `tablename`"
."("
."`number` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,"
."`name` VARCHAR(50) NOT NULL,"
."`comment` VARCHAR(50) NOT NULL"
.");";
$rs=mysql_query($sql)or die(mysql_error());
//echo "ok";


/*$dsn = 'mysql:dbname=データベース名;host=localhost';
$user = 'ユーザー名';
$password = 'パスワード';
$pdo = new PDO($dsn,$user,$password);

$sql2="SHOW TABLES";

$result=$pdo->query($sql2);
foreach ($rs2 as $row2){
echo $row2[0];
echo '<br>';
}
or die(mysql_error());
print('<p>テーブル一覧が表示されました。</p>');

$dsn = 'mysql:dbname=データベース名;host=localhost';
$user = 'ユーザー名';
$password = 'パスワード';
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
//    print('<p>切断に成功しました。</p>');
//}

*/
?>