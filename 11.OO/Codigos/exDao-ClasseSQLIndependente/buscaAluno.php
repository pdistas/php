<?php

require_once("config.php");

$aluno = new Aluno();

$aluno->loadById(22);

echo $aluno;