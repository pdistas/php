<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>

<h1>Upload de Arquivos</h1>

<form method="post" enctype="multipart/form-data"> <!-- enctype para indicar que o form além de texto, tb enviará arquivo binário -->
    RA:<br>
    <input type="text" name="ra">

    <br><br>

    Nome:<br>
    <input type="text" name="nome">

    <br><br>

    Arquivo:<br>
    <input type="file" name="trabalho">

    <br><br>

    <input type="submit" value="Cadastrar">

</form>

<?php

/* esse if permite fazer o post sem action no form, executando o php da mesma página */

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

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

    if (move_uploaded_file($arquivo["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $ra . "-" . $nome . "-" . $arquivo["name"])) {
        echo "Upload realizado com sucesso";
    } else {
        throw new Exception("Não foi possível realizar o upload.");
    }

}

?>

</body>
</html>