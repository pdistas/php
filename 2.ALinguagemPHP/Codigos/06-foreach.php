<?php

$cores = array("Branco","Verde","Vermelho");

foreach($cores as $cor) {
	echo $cor."<br>";
}

$valores = array(55.00,10.99,20.00);
$total = 0;

foreach($valores as $valor) {
	$total = $total + $valor;
}