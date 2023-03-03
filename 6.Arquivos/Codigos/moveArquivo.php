<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 03/04/2019
 * Time: 16:03
 */


  $dir1 = "pasta1";
  $dir2 = "pasta2";

  if (!is_dir($dir1))
      mkdir($dir1);

  if (!is_dir($dir2))
    mkdir($dir2);

  $filename = "LEIAME.txt";

  if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {
      $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");
      fwrite($file, date("Y-m-d H:i:s"));
      fclose($file);
  }

  //origem, destino - move pasta
  rename($dir1 . DIRECTORY_SEPARATOR . $filename, $dir2 . DIRECTORY_SEPARATOR . $filename);

   //origem, destino - renomeia arquivo
   //rename($dir1 . DIRECTORY_SEPARATOR . $filename, $dir1 . DIRECTORY_SEPARATOR . "simone.txt");

  echo "Arquivo movido com sucesso";