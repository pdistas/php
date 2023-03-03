<?php
    if (empty($_GET["login"]) && empty($_GET["msg"])) {
        $msg = "";
        $conteudo = "conteudoHome.html";
    }
    else if ($_GET["login"]) {
        $conteudo = "conteudoAdmin.html";
        $msg = "";
    }
    else {
        $conteudo = "conteudoHome.html";
        $msg = $_GET["msg"];
    }
?>

<html>
  <head>
      <title>DINFO App</title>

      <style>

        #principal {
            width: 100%;
            border: 1px black solid;
        }

        #conteudo {
            width: 50%;
            border: 1px black solid;
            vertical-align: top;
        }

        #login {
            width: 40%;
            float: right;
            border: 1px black solid;
            vertical-align: top;
        }

      </style>
  </head>

  <body>

    <div id="menu">
        <h1>DINFO App</h1>
        <hr>
        Home | Sobre
        <hr>
    </div>

    <div id="principal">

        <div id="conteudo">
            <?php
              include $conteudo;
            ?>
        </div>

        <!--- jogar o conteudo dessa div em um var igual ao da div conteudo --->

        <div id="login">
            <h1>Login</h1>
            <form method="get" action="login.php">
                Usuário:<br>
                <input type="text" name="usuario" size="20"><br><br>
                Senha:<br>
                <input type="text" name="senha" size="20"><br><br>
                <input type="submit" value="Entrar">
            </form>

            <?php
               echo $msg;
            ?>
        </div>

    </div>

  </body>

</html>