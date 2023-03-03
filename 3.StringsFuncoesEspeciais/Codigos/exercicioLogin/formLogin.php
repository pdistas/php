    <h1>Login</h1>
    <form method="get" action="validaLogin.php">
        Usuário:<br>
        <input type="text" name="usuario" size="20"><br><br>
        Senha:<br>
        <input type="text" name="senha" size="20"><br><br>
        <input type="submit" value="Entrar">
    </form>


        <?php
            echo "<div id='msg'>".$msg."</div>";
        ?>

