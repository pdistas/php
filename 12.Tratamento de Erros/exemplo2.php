<?php
/** Exception **/

function trataNome($name) {
    if (!$name) {
        throw new Exception("Nenhum nome foi informado.", 1); //lançando sua própria exception
    }
    echo $name . "<br>";
}


try {
    trataNome("Simone");
    trataNome("");
} catch (Exception $e) {
    echo $e->getMessage();

} finally { //bloco finally sempre será executado, com ou sem erro/exception
    echo "<br>Executou o try.";
}

?>