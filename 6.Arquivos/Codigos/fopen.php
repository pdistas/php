<?php
$filename = fopen("log.txt", 'w+');

fwrite($filename, date("Y-m-d H:i:s"));

fclose($filename);

echo "Arquivo criado com sucesso";
