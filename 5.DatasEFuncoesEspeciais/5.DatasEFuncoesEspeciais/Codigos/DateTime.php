<?php
    $atual = new DateTime();
    echo "<br>" . $atual->format('d-m-Y H:i:s');

    $especifica = new DateTime('1990-01-22');
    echo "<br>" . $especifica->format('d-m-Y H:i:s');

    $texto = new DateTime('+1 month');
    echo "<br>" . $texto->format('d-m-Y H:i:s');

?>