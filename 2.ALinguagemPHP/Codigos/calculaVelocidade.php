<?php

    $v0 = $_GET["v0"];
    $a = $_GET["a"];
    $t = $_GET["t"];
    $v = $v0 + $a * $t;
    $velocidadeFinal = 3.6 * $v;


    echo "<hr>";
    
    echo "Velocidade Inicial: " . $v0;
    echo "<br>";
    echo "Aceleração: " . $a;
    echo "<br>";
    echo "Tempo: " . $t;

    echo "<hr>";

    echo "<b>Velocidade Final: " . $velocidadeFinal ." Km/h</b>";

?>

