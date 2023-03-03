<?php

require_once("config.php");

$aluno = new Aluno();

$aluno->loadById(987); //carregando dados de um usuário

echo "Aluno antes de excluir:<br>";
echo $aluno;

$aluno->delete('987');

echo "<br>Aluno após excluir:<br>";
echo $aluno;