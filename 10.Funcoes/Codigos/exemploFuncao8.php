<?php

/*
Para permitir que uma função modifique os seus argumentos, eles devem ser passados por referência,
ou seja enviamos para a função uma referência (endereço de memória) a variável em vez de uma cópia
do valor contido nela. Para isto, basta acrescentarmos o & antes da declaração do parâmetro da função.
*/

$a = 10;

function trocaValor(&$a) {
    $a += 50;
    return $a;
}

echo trocaValor($a);
echo "<br>";
echo $a;

?>