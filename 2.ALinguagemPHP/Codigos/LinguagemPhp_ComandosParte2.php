<?php
    ob_start();
?>
<HTML>
    <HEAD>
        <TITLE>A Linguagem Php</TITLE>
    </HEAD>
    <BODY>
       
<?php

    echo "Iniciando <BR>";
    
    // include("LinguagemPhp_ArquivoAuxiliar.php");
    // include("LinguagemPhp_ArquivoAuxiliar.php");
    
    // include_once("LinguagemPhp_ArquivoAuxiliar.php");
    // include_once("LinguagemPhp_ArquivoAuxiliar.php");
    
    //
    // require("LinguagemPhp_ArquivoAuxiliar.php");
    
    // require_once("LinguagemPhp_ArquivoAuxiliar.php");
    // require_once("LinguagemPhp_ArquivoAuxiliar.php");
    
    echo "Finalizando <BR>";
    
    //header("Location: http://www.google.com.br");
    
    function minhaFuncaoDobro(float $valor): float
    {
        $valor = $valor * 2;
        return $valor;
    }
    
    $x = minhaFuncaoDobro(5);
    echo $x . "<BR>";
    
    function minhaSoma(int $valor1, int $valor2): int
    {
        return $valor1 + $valor2;
    }
    $x = minhaSoma(5, 8);
    echo $x . "<BR>";

?>
        
    </BODY>
</HTML>
<?php
    ob_flush();
?>