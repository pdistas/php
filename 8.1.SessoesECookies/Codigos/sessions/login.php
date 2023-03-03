<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>

<form method="post">

    Login:<br>
    <input type="text" name="login" size="15">

    <br><br>

    Senha:<br>
    <input type="password" name="senha" size="15">

    <br><br>

    <input type="submit" value="Ok">

</form>

</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if ( ($login == 'simone') && ($senha == '12345') ) {
        session_start();

        $_SESSION["login"] = $login;
        $_SESSION["senha"] = $senha;

        header("location:inicio.php");
    } else {
        echo "Usuário inválido!";
    }

 }

?>
