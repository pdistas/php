<?php
    session_start();

    echo "session_status: "    . session_status()    . "<br>";
    echo "session_save_path: " . session_save_path() . "<br>";
    echo "session_id: "        .session_id()         . "<br>";
    session_regenerate_id();
    echo "novo session_id: "   . session_id()        . "<br>";    
?>

<html>
    <head>
        <title>Session</title>

        <style>
            #principal {
                display: flex;
                justify-content: space-between;
             }
        </style>
    </head>
    <body>

    <?php
        if ($_SESSION["logou"]) {

            echo "<span style='color:red;font-weight: bold';>Acesso não autorizado!</span>
                <hr>
                <a href='login.php'>Login</a>";

        } else {

            echo "
                <div id='principal'>
                    <div>
                      <b>" . $_SESSION['login'] . "</b>, seja bem-vindo(a) ao nosso 
                    site!
                    </div>
                    <div class='topo'>
                        <a href='logout.php'>Logout</a>
                    </div>
                </div>
                <hr>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>";
        }

     ?>

    </body>
</html>