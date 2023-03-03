<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 03/04/2019
 * Time: 16:24
 */

$filename = "alunos.txt";

if (file_exists($filename)) {
    $file = fopen($filename, "r");
}

//enquanto não for fim de arquivo, o fget lê uma linha
$linha = 1;
while (!feof($file))  {
  echo "Linha " . $linha++ . ": " . fgets($file) . "<br>";
}

// file is closed using fclose() function
fclose($file);
?>