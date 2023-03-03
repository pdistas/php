<?php
    session_start();

    // Resultado: remove a variável "login" da sessão, mas mantém a variável "senha"
    //unset($_SESSION["login"]);
    //unset($_SESSION["logou"]);

    // Resultado: remove todas as variáveis da sessão
    session_destroy();


?>