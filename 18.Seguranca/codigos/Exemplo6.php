<!--
  Para testar pode-se informar no campo um dos comandos abaixo, por ex:
  <b>oi</b>
  <a href="http://www.google.com">google</a>
  <u>oi</u>
  <script>alert('oi');</script>
-->

<html>
    <head>XSS</head>

    <body>

        <form method="post">
            <input type="text" name="busca">
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>

<?php

    if (isset($_POST["busca"])) {

        echo $_POST["busca"]; //imprime com o comando digitado aplicado
        echo "<br>";

        echo strip_tags($_POST["busca"]); //retira os comandos html do texto informado
        echo "<br>";

        echo strip_tags($_POST["busca"], "<b><i>"); //retira os comandos html do texto informado, exceto se forem <b> ou <i>
        echo "<br>";

        echo htmlentities($_POST["busca"]);//transforma qq comando html em texto

    }

?>