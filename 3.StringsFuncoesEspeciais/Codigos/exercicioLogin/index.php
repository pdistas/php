<?php
    /* Define o local para o Português(Brasil)  */
    setlocale (LC_ALL, 'pt_BR');

    /* Define o fuso horário */
    date_default_timezone_set('Brazil/East');

    if (empty($_GET["login"]) && empty($_GET["msg"])) { //abertura inicial sem parâmetros
        $msg = "";
        $conteudo = "conteudoHome.html";
        $conteudoLogin = "formLogin.php";
    }
    else if ($_GET["login"]=="ok") { //login sucesso
        $conteudo = "conteudoAdmin.html";
        $conteudoLogin = "conteudoLogado.html";
        $msg = "";
    }
    else { //erro de login
        $conteudo = "conteudoHome.html";
        $conteudoLogin = "formLogin.php";
        $msg = $_GET["msg"];
    }

    function exibeData() {
        //echo date("l - d/m/Y"); //não funciona o locale
        echo strftime ("%A, %e de %B de %Y",); //acata o locale
    }
?>

<html>
  <head>
      <title>DINFO App</title>

      <style>

        #principal {
            width: 100%;
        }

        #conteudo {
          width: 70%;
          margin-right: 10%;
          float: left;
        }

        #login {
            width: 20%;
            float: left;
        }

        #msg {
            width: auto;
            color: red;
        }

      </style>
  </head>

  <body>

    <div id="menu">
        <h1>DINFO App</h1>
        <hr>
        <?php exibeData(); ?>
        <hr>
    </div>

    <div id="principal">

        <div id="conteudo">
            <?php
            include $conteudo;
            ?>
        </div>

        <div id="login">
            <?php
            include $conteudoLogin;
            ?>
        </div>

    </div>

  </body>

</html>