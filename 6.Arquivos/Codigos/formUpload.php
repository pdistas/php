<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 03/04/2019
 * Time: 15:49
 */

$ra = $_POST["ra"];
$nome = $_POST["nome"];
$arquivo = $_FILES["trabalho"];

if ($arquivo["error"]) {
    throw new Exception("Erro: " . $file["error"]);
}

$dirUploads = "uploads";

if (!is_dir($dirUploads)) {
    mkdir($dirUploads);
}

if (move_uploaded_file($arquivo["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $ra."-".$nome."-".$arquivo["name"])) {
    echo "Upload realizado com sucesso";
} else {
    throw new Exception("Não foi possível realizar o upload.");
}

?>