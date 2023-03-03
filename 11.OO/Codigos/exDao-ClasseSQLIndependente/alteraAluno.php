<?php

require_once("config.php");

$aluno = new Aluno();

$aluno->loadById(22); //carregando dados de um usuário

echo "Aluno antes de alterar:<br>";
echo $aluno;

$aluno->update('Ana', 'Enfermagem');

echo "<br>Aluno após alterar:<br>";
echo $aluno;