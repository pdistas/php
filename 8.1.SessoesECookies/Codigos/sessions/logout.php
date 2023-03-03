<?php

    session_start();

    // Resultado: remove a variável "login" da sessão, mas mantém a variável "senha"
    //unset($_SESSION["login"] );

    // Resultado: remove todas as variáveis da sessão
    session_destroy();

    header("location:login.php");
?>