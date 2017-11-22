<?php
$a="ƒeƒXƒg";
$handle=fopen("a.txt",'w');
fwrite($handle,$a);
fclose($handle);
print $a;
?>