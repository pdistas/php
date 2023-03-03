<?php

    echo "Iniciando o arquivo<BR>";
    
    // try/catch já existia, conversão de erros para exceções que é novo no Php 7
    
    try
    {
        mysql_connect("mysql.localhost");
    }
    catch(Error $e)
    {
        // echo "Falha<BR>";
        echo "Falha: " . $e->getMessage() . "<BR>";
    }
    
    echo "Finalizando o arquivo<BR>";
    
    // Operador Spaceship <=>
    
    $x = "b" <=> "a";
    echo $x . "<BR>"; // 1
    
    $x = "b" <=> "b";
    echo $x . "<BR>"; // 0
    
    $x = "b" <=> "c";
    echo $x . "<BR>"; // -1
    
    switch($x)
    {
        case -1:
            echo "É menor/anterior<BR>";
            break;
        case 0:
            echo "É igual<BR>";
            break;
        case 1:
            echo "É maior/posterior<BR>";
            break;
    }
    
    // Operador ??
    
    $x = null;
    
    if(isset($x) == TRUE)
    {
        $y = $x;
    }
    else
    {
        $y = "Valor alternativo";
    }
    echo $y . "<BR>";
    
    $z = $x ?? "Valor alternativo";
    echo $z . "<BR>";

?>
