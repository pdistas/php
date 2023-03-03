<?php
// lê o conteúdo do arquivo para uma string
$filename = "teste.txt";
$handle = fopen ($filename, "r");
$conteudo = fread ($handle, filesize ($filename));
echo $conteudo;
fclose ($handle);
