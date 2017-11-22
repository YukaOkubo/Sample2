<?php
$contents=file('kadai_2-2.txt');
foreach($contents as &line){
&message=explode("ƒ„",$line);

echo $message[0];
echo $message[1];
echo $message[2];
echo $message[3];
echo $message[4];
}
?>