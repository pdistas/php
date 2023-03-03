<?php
/**
 * exemplo que mostra como executar um comando do SO via PHP
 * o comando system mostra o retorno da execução, já o comando exec não mostra o retorno
 * a tag html <pre> exibe o texto pré-formatado
 */

    echo "<pre>";
    $comando = system("dir C:", $retorno); //system já mostra o retorno, exec só executa
    echo "</pre>";

?>