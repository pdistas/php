<?php

/* Evita a necessidade de fazer require de todos os arquivos na hierarquia da classe Fusca.
   Faz isso automaticamente qd a instanciamos */

function __autoload($nomeClasse) {
    require_once("$nomeClasse.php");
}

$carro = new Fusca();
$carro->acelerar(100);

?>