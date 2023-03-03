<?php

$x = 2;

/*
if ($x%2 == 0) {
	$resultado = "par";
} else {
	$resultado = "ímpar";
}*/

$resultado = ($x%2)==0 ? "par" : "impar";

echo $resultado;