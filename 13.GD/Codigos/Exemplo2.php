<?php
/** Lib GD - graphic design - criando uma imagem a partir de outra já existente */

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor  = imagecolorallocate($image, 0, 0, 0);

$gray = imagecolorallocate($image, 100, 100, 100);

//escreve um texto comm font padrão da lib GD
imagestring($image, 5, 450, 150, "Certificado", $titleColor);
imagestring($image, 5, 440, 350, "Simone B. R. Dapolito", $gray);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $gray);

header("Content-Type: image/png"); //aqui pois nesse caso geramos a img a partir de outra

//gera a img - renderiza a tela
imagejpeg($image);

//pode gerar a  img em disco ao inves de gerar na tela
//imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 100); //ultimo parametro indica a qualidade da img de 0 a 100

//libera o resorce
imagedestroy($image);

?>