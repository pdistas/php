<?php
$meuArray = array();
$meuArray = array("Maçã", "Melão", "Uva");
array_unshift($meuArray,"Laranja");
foreach($meuArray as $fruta) {
	echo $fruta.", ";
}

