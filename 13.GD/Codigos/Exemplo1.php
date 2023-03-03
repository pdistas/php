<?php
/** Lib GD - graphic design - criando uma imagem do zero */

header("Content-Type: image/png");

$image = imagecreate(256, 256); //desenhando a tela - largura x altura

$black = imagecolorallocate($image, 0, 0, 0); //criando uma cor - a 1a cor sempre será a do bk

$red = imagecolorallocate($image, 255, 0, 0);

//escreve um texto comm font padrão da lib GD
imagestring($image, 5, 60, 120, "Cotil-Unicamp", $red); //escreve um texto - local, tam font de 1 a 5, posição x/y, texto e cor

//gera a img - renderiza a tela
imagepng($image);

//libera o resorce
imagedestroy($image);

?>