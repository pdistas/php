<?php
function insereDelitador($valor) { return "[".$valor."]"; }

$meuArray = array();
$meuArray = array("Maçã", "Melão", "Uva");
$meuArray = array_map("insereDelitador", $meuArray);
foreach($meuArray as $fruta) {
	echo $fruta.", ";
}

