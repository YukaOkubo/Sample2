<?php
$filename="kadai_2-2.txt";

if($_SERVER["REQUEST_METHOD"]=="POST"){
$file=file($filename);
$fp=fopen($filename, "w");
for($i = 0; $i <count($file);$i++ ) {
	$num = explode("＜＞",$file[$i]);

	if($num[0]!= $_POST["delnumber"]){

		fwrite($fp,$file[$i]);
//!=　not equal入力された番号と一致しなかった時だけ上書き
	}
}
fclose($fp);

}

$contents=file("kadai_2-2.txt");
foreach($contents as $line){
$message=explode("＜＞",$line);

echo '<p>',$message[0],'</p>';
echo '<p>',$message[1],'</p>';
echo '<p>',$message[2],'</p>';
echo '<p>',$message[3],'</p>';
echo '<p>',$message[4],'</p>';
}

?>