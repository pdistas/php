<?php

    function teste() {
        $argumentos = func_get_args();
        return $argumentos;
    }

    var_dump(teste("Bom dia!"));

    echo "<br>";

    var_dump(teste("Bom dia!", 40.5, true));
?>