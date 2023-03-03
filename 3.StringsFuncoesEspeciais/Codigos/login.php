<?php
    $usuarioDesejado = "admin";
    $senhaDesejadas   =  md5("senha123");

    $usuarioInformado = $_GET["usuario"];
    $senhaInformada   = $_GET["senha"];

    $msg="";
    $login=0;

    if ( empty($usuarioInformado) || empty($senhaInformada) ) {
        $msg = "Informe seu login e senha!";
    }

    else if ( strlen($usuarioInformado) < 5 ) {
        $msg = "O login deve ter no mínimo 5 caracteres!";
    }

    else if ( strlen($senhaInformada) < 6 ) {
        $msg = "A senha deve ter no mínimo 6 caracteres!";
    }

    else if ($usuarioInformado != $usuarioDesejado) {
        $msg = "Login inválido!";
    }

    else if (md5($senhaInformada) != $senhaDesejadas) {
        $msg = "Senha inválida!";
    }

    else {
        $login = 1;
    }

    header('Location: exercicioSenha.php?msg='.$msg.'&login='.$login);

