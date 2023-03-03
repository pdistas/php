<?php
$arrayExemplo = array ( "Linguagem1" => "Php", "Linguagem2" => "SQL",
"Linguagem3" => 100, "Linguagem4" => "Assembler");
print_r($arrayExemplo);
shuffle($arrayExemplo);
echo "<hr>Após 'embaralhar' com shuffle(array)<br>";
print_r($arrayExemplo);
echo "<hr><h2>Pressione F5 para atualizar a página e observe o resultado!</h2>";