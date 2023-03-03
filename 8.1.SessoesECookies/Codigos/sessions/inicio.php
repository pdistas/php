<?php
    session_start();
    echo "session_id: " .session_id(); //esse id só é alterado/gerado novamente, qd o navegador é fechado. Dependendo do navegador, como o google chrome, inclusive é necessário fechar o que ficar ainda em execução no gerenciador de tarefas.

    /* dados da session */

    /*
    echo "session_status: "    . session_status()    . "<br>";
    echo "session_save_path: " . session_save_path() . "<br>";
    echo "session_id: "        .session_id()         . "<br>";
    session_regenerate_id();
    echo "novo session_id: "   . session_id()        . "<br>";

    */
?>

<html>
    <head>
        <title>Session</title>

        <style>
            .topo {
                float: left;
                width: 50%;
                height: 50px;
             }
        </style>
    </head>
    <body>

    <?php
        if (!isset($_SESSION["login"])) {

            echo "<span style='color:red;font-weight: bold';>Acesso não autorizado!</span>
            <br><br>
            <a href='login.php'>Login</a>";

        } else {

            echo "<div class='topo'><b>" . $_SESSION['login'] . "</b>, seja bem-vindo(a) ao nosso site!</div>
                  <div class='topo'><a href='logout.php'>Logout</a></div>
                  <br>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>";
        }

     ?>

    </body>
</html>