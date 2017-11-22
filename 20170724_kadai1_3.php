<?php

$a=fopen("sample2.txt","r");
while($line=fgets($a)){
echo"$line<br/>";
}
fclose($a);

?>