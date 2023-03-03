<?php

	$media = 4.5;	

	if($media >= 6.0) {
		echo "Aprovado!";
	} else if( ($media > 3.0) && ($media < 6.0) ) {
		echo "Dependencia!";
	} else{
		echo "Reprovado!";
    }