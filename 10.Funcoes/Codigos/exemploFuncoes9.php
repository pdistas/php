<?php

/* a partir do php 7 é possível indicar o tipo dos parâmetros e do retorno de uma função.
   Também é possível a partir do uso dos ... indicar que serão enviados n parâmetros de um mesmo tipo */

function soma(float ...$valores):string {
//function soma(int ...$valores):string {
    return array_sum($valores);
}

echo var_dump(soma(2,2));
echo "<br>";

echo soma(25, 33);
echo "<br>";

echo soma(1.5, 3.2);
echo "<br>";

?>