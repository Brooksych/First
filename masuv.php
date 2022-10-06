<?php
$word = "Grobelnyi";
echo $word[0];
echo "<br>";
echo $word[8];
echo "<br>";
$mas[]="apelsun";
$mas[]="sluva";
$mas[]="banan";
$mas[]="garbyz";
$mas[]="yablyko";
foreach ($mas as $value){
	echo $value." ";
	echo "<br>";
}
echo (count($mas));
echo "<br>";

$n = array(10,20,-10,50);
$n = [4] = -20;
$n = [0] = 0;
foreach($n as $value){
	echo $value." ";
}

?>