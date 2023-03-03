<?php
   //-------------------- variáveis --------------------
    $nome = "COTIL";
    echo $nome;
    echo "<br><br>";

    var_dump($nome); //exibe o tipo de dado, tamanho usado e valor
    echo "<br><br>";

    $outroNome = "UNICAMP";

    echo $nome . " " . $outroNome;
    echo "<br><br>";

    unset($nome); //Remove a variável. Se quiser limpar várias, basta separar por ","

    if (isset($nome)) {
        echo $nome;
        echo "<br><br>";
    } else {
        echo "a variável está vazia!"
    }

    $valor = 50.15;
    echo $valor;
    echo "<br><br>";

    $aprovado = true;
    echo $aprovado;
    echo "<br><br>";

    $disciplinas = array("BD", "LP", "DAW");
    echo $disciplinas[2];
    echo "<br><br>";

    $nulo = null;
    $vazio = "";

    //-------------------- constantes --------------------

    define("PI", 3.14);
    define("NOME_ALUNO", "Maria");

    //https://secure.php.net/manual/pt_BR/reserved.constants.php - contantes pré-definidas do PHP
    
    $resultado = 3 * PI;
    echo $resultado . "<BR><BR>";
    echo "Nome do Aluno: " . NOME_ALUNO . "<BR><BR>";

    //-------------------- super variáveis --------------------

    echo "<br><br>";
    echo $_SERVER["SERVER_ADDR"] . "<BR>";
    echo $_SERVER["SERVER_NAME"] . "<BR>";
    echo $_SERVER["HTTP_USER_AGENT"] . "<BR>";
    echo $_SERVER["REMOTE_ADDR"] . "<BR>";
    echo $_SERVER["SCRIPT_NAME"] . "<BR>";

?>