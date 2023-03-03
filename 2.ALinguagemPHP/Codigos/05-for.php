<?php

$n = 1;
$tabuada = 7;

for($n=1;$n<=10; $n++){
	if($n==7) continue;
	echo $n. " x " . $tabuada . " = " . ($n * $tabuada) . "<br>";
}