<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Testando Menu com Require</title>
</head>
<body>

    <?php

    require("menu.html"); 
    //require verifica se o arquivo existe
    //require_once tem a garantia que o arquivo não será incluído novamente se ele já foi incluído antes.

    ?>

    <br><br>
    Testando Menu com Require

</body>
</html>

<!--

Require: insere o arquivo, porém aborta o script caso seja encontrado algum erro no arquivo que está sendo inserido.

-->