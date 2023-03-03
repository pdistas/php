<?php
	$aExemplo = array(	"ra"=>18101,
						"serie"=>3,
						"nome"=>"José Alberto Matioli");

	print_r($aExemplo);

	echo $aExemplo["ra"] . " - " . $aExemplo["nome"]; 

	$aExemplo["nome"]="J. A. Matioli";

	echo "<br>";
	echo $aExemplo["ra"] . " - " . $aExemplo["nome"]; 
