<?php
$filename = "teste.txt";

$handle = fopen($filename, 'a');

$autor = "<br><hr>Atualizado por: Alunos<br>";

if (!$handle) {
	echo "Não foi possível abrir o arquivo ($filename)";
    exit;
} else if (fwrite($handle, $autor) === FALSE) { // Escreve $conteudo no nosso arquivo aberto.
	echo "Não foi possível escrever no arquivo ($filename)";
    exit;
} else {
    echo "Sucesso!!!";
}
fclose($handle);
