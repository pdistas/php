<?php

// valor padrão que será usado quando o parâmetro não for informado
function Mensagem($texto = "mundo") {
    return "Olá $texto <br>";
}

echo Mensagem();
echo Mensagem("");
echo Mensagem("Simone");

?>


<html>
<body>

<h1><?php echo Mensagem("Unicamp")?></h1>

</body>

</html>
