<?php

function Mensagem($texto) {
    return "Olá $texto <br>";
}

echo Mensagem("Simone");
echo Mensagem("Cotil");

?>


<html>
<body>

<h1><?php echo Mensagem("Unicamp")?></h1>

</body>

</html>
