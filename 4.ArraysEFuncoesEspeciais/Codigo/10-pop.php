<?php
$meuArray = array();
$meuArray = array("Maçã", "Melão", "Uva");
array_pop($meuArray);
foreach($meuArray as $fruta) {
	echo $fruta.", ";
}

