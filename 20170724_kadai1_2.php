<?php
$a="�e�X�g";
$handle=fopen("a.txt",'w');
fwrite($handle,$a);
fclose($handle);
print $a;
?>