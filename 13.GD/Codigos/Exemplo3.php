<?php
/** Lib GD - graphic design - criando uma imagem a partir de outra já existente */

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor  = imagecolorallocate($image, 0, 0, 0);

$gray = imagecolorallocate($image, 100, 100, 100);

//escreve um texto com font true type que estao na pasta fonts desse exemplo
imagettftext($image, 32, 0, 320,250, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "Certificado"); //angulo (0 para ficar reto),  __DIR__ (dir atual)

imagettftext($image, 32, 0, 375,350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Simone B. R. Dapolito");

imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $gray);

header("Content-Type: image/jpeg");

//gera a img - renderiza a tela
imagejpeg($image);

//pode gerar a  img em disco ao inves de gerar na tela
//imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 100); //ultimo parametro indica a qualidade da img de 0 a 100

//libera o resorce
imagedestroy($image);

?>