<?php

/* BASE64
É um método para codificação dos dados para transferência na Internet. Ela é uma codificação de mão dupla, e usando uma segunda função você pode descobrir a string original de uma string codificada. */

$string = 'O rato reu a ropa do rei de Roma';

$codificada = base64_encode($string);

echo "Resultado da codificação usando base64: " . $codificada;

echo "<br>";

$original = base64_decode($codificada);

echo "Resultado da decodificação usando base64: " . $original;

// Note que $original vai ser idêntica a $string