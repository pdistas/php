<?php
$meuArray = array();
$meuArray = array("Maçã", "Melão", "Uva");
array_shift($meuArray);
foreach($meuArray as $fruta) {
	echo $fruta.", ";
}

