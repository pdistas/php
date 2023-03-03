<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Incluindo PHP</title>
</head>
<body>

<?php

    //include("functions.php");
    require("functions.php");

    $media = calcMedia(9.0, 10.0);
    echo $media;

    echo "<br><br>";

    soma(1, 2, 3);
?>

</body>
</html>

<!--
A diferença entre include e require é a forma como um erro é tratado.
require produz um erro E_COMPILE_ERROR , o que encerra a execução do script.
O include apenas produz um warning que pode ser "abafado".
-->
