<?php
$dir = "./"; //diretorio corrente da aplicação
// Abre um diretorio conhecido, e faz a leitura de seu conteudo
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            echo "nome: $file - ";
            echo "tipo: " . filetype($dir . $file) . "\n<br>";
        }
        closedir($dh);
    }
}
