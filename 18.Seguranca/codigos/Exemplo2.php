<?php
/**
 * exemplo que mostra como executar um comando do SO via PHP, mas o comando será enviado via POST
 * o comando system mostra o retorno da execução, já o comando exec não mostra o retorno
 * a tag html <pre> exibe o texto pré-formatado
 * posso executar 2 comandos, com o && -> dir c:\ && mkdir c:\simone, ou seja, posso pegar um comando que já exista no código
 * e colocar outro
 * escapeshellcmd() escapa qualquer caractere em uma string que possa ser utilizado para enganar um comando shell para executar comandos arbritários. Esta função deve ser utilizada para ter certeza que quaisquer dados vindos do usuário é escapado antes que estes dados sejam passados para as funções exec() ou system()
 * usando pela 1a vez apenas dir c:\ e depois com dir c:\ && mkdir c:\simone
 */

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cmd = $_POST["cmd"];
    //$cmd = escapeshellcmd($_POST["cmd"]); //vai inserir / e ^ nos comandos enviados, invalidando
    var_dump($cmd);


    echo "<pre>";
    $comando = system($cmd, $retorno); //system já mostra o retorno, exec só executa
    echo "</pre>";
}

?>

<html>
    <body>
        <form method="post">
            <input type="text" name="cmd">
            <button>Executar</button>
        </form>
    </body>
</html>
