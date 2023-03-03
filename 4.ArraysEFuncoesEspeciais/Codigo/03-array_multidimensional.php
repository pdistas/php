<?php
	$aExemplo = array(	"ra"=>18101,
						"serie"=>3,
						"aluno"=>array("nome"=>"José A. ",
							  "sobrenome"=>" Matioli"));

	echo $aExemplo["ra"] . " - " . $aExemplo["aluno"]["sobrenome"]; 

