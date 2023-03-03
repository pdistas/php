<?php

require_once("config.php");

$aluno = new Aluno();

$alunos = $aluno->listAlunos();

echo json_encode($alunos);