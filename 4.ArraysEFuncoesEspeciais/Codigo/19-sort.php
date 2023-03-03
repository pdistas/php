<?php
$arrayExemplo = array ( "Linguagem1" => "Php", "Linguagem2" => "SQL",
"Linguagem3" => 100, "Linguagem4" => "Assembler");
print_r($arrayExemplo);
sort($arrayExemplo);
echo "<hr>Após 'ordenar' com sort(array)<br>";
print_r($arrayExemplo);
