<?php

require_once("config.php");

$aluno = new Aluno();

$aluno->setRa('22');
$aluno->setNome('Simone');
$aluno->setCurso('Informática');

echo $aluno->insereAluno();