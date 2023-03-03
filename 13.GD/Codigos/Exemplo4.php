<?php
/** Lib GD - graphic design - cópia de img */

header("Content-Type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

$data = getimagesize($file); //retorna o tamanho da imagem
$old_width = $data[0];
$old_height = $data[1];

$new_image = imagecreatetruecolor($new_width, $new_height);  //cria a área da img com milhoes de cores
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0,0,0,0, $new_width, $new_height, $old_width, $old_height);// os zeros são as coordenadas das imgs, se quisesse fazer um crop/corte nela, poderia mudar

imagejpeg($new_image);

imagedestroy($new_image);
imagedestroy($old_image);
?>