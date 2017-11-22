<?php
$a=($_POST['textbox']);
$handle=fopen("kadai5.txt",'w');
fwrite($handle,$a);
fclose($handle);
print $a;
?>

<form action="20170725_kadai1_5.php" method="post">
 <input type="text" name="textbox"/>
 <input type="submit" value="•Û‘¶‚³‚ê‚é‚©‚È" />
</form>
