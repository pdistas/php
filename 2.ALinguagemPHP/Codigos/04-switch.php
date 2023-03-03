<?php

$op = 3;

switch($op){
	case 1:
		cadastrar();
		echo "Cadastro";
		break;
	case 2:
		//emitirRelatarioVenda();
		echo "Relatorios";
		break;
	default:
		echo "Opcao invalida!";
		break;
}

echo "oi";