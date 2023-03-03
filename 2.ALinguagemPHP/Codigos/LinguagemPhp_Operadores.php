<HTML>
<HEAD>
    <TITLE>A Linguagem Php</TITLE>
</HEAD>
<BODY>

<?php

//---------- operadores aritméticos ----------

echo "Operadores Aritméticos <BR>";
$x = 3 + 5;
$x = 3 - 5;
$x = 3 * 5;
$x = 16 / 5;
$x = 16 % 5;

$x = 3;
$x++;
echo $x . "<BR>";

$x = 3;
++$x;
echo $x . "<BR>";

$x = 3;
$y = 1 + $x++;
echo "x = " . $x . " e y = " . $y . "<BR>";

$x = 3;
$y = 1 + ++$x;
echo "x = " . $x . " e y = " . $y . "<BR>";

$x = 3;
$x *= 5;
echo $x . "<BR><BR>";

//---------- Arredondamento ----------
echo "Arredondamento <BR>";

echo round(5.5, 0, PHP_ROUND_HALF_DOWN) . "<BR>"; //p baixo
echo round(5.5, 0, PHP_ROUND_HALF_UP) . "<BR>"; //p/ cima
echo round(5.5, 0, PHP_ROUND_HALF_EVEN) . "<BR>"; //prox par
echo round(5.5, 0, PHP_ROUND_HALF_ODD) . "<BR>"; //prox impar

echo round(5.55, 1, PHP_ROUND_HALF_DOWN) . "<BR>";
echo round(5.55, 1, PHP_ROUND_HALF_UP) . "<BR>";
echo round(5.55, 1, PHP_ROUND_HALF_EVEN) . "<BR>";
echo round(5.55, 1, PHP_ROUND_HALF_ODD) . "<BR><BR>";

?>

</BODY>
</HTML>