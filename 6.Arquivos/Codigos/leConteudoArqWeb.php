<?php
/**
 * O resultado desse script será a exibição da página no browser, pois será carregados todo o
 * conteúdo do site na variável $homepage, que será em seguida exibida com o comando echo.
 */

    $homepage = file_get_contents('http://www.profasimone.com.br/');
    echo $homepage;
?>