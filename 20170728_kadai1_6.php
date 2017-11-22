<?php
$a=$_POST['textbox'];
$handle=fopen("kadai5.txt",'a');
        fwrite($handle,$a);
        fwrite($handle,PHP_EOL);
        fclose($handle);
print $a;
printPHP_EOL;
?>

<form action="20170728_kadai1_6.php" method="post">
 <input type="text" name="textbox"/>
 <input type="submit" value="’Ç‹L•Û‘¶‚³‚ê‚é‚©‚È" />
</form>