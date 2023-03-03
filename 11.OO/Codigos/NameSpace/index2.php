<?php

require_once("config.php");

use Cliente\Cadastro; //para usar a Classe cadastro do namespace Cliente, que herda a classe classs/Cadastro

$cad = new Cadastro();
$cad->setNome("Simone");
$cad->setEmail("simone.berbert@gmail.com");
$cad->setSenha("12345");

echo $cad; //echo não mostra objeto, mas temos o método mágico __toString que sabe exibir o obj como String
//pode instalar a extensão json viewer no chrome para ver o json bonitinho

$cad->registrarVenda();
?>