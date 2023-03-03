<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 03/04/2019
 * Time: 16:57
 */

  $filename = "logo.png"; //esse nome poderia estar vindo do BD

  $base64 = base64_encode(file_get_contents($filename)); //codifica os dados do arquivo binário

  $fileinfo = new finfo(FILEINFO_MIME_TYPE); //pega informações do tipo do arquivo

  $mimetype = $fileinfo->file($filename);

  $base64encode = "data:" . $mimetype . ";base64," . $base64; //fica genérico pq usa o mimetype

  //$base64encode = "data:image/png;base64," . $base64; // teria que alterar para cada tipo de arquivo

  ?>

  <a href="<?=$base64encode?>" target="_blank">Link para imagem</a> //ERRO - não abre... ver pq

  <img src="<?=$base64encode?>">
