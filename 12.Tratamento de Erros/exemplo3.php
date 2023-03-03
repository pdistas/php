<?php
/** Error **/

function manipulaErro($code, $message, $file, $line) {

    echo json_encode(array(
        "code" => $code,
        "message" => $message,
        "file" => $file,
        "line" => $line
    ));
}

    set_error_handler("manipulaErro"); //não deixa o php exibir o erro dele e sim da forma programada na função

    echo 100/0;

?>