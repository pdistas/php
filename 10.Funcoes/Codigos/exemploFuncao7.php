<?php

/*
Por padrão, argumentos de função são passados por valor
(de forma que se você mudar o valor do parâmetro dentro da função, ele não é alterado fora da função).
*/

$a = 10;

function trocaValor($a) {
    $a += 50;
    return $a;
}

echo trocaValor($a);
echo "<br>";
echo $a;

?>