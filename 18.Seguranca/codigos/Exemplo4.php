<?php
/**
- ao criar pastas via comando, podemos informar a permissão que queremos dar.
 */

$pasta = "arquivos";
$permissao = "0775";

if (!is_dir($pasta)) {
    mkdir($pasta, $permissao);
    echo "Diretório criado com sucesso.";
}

?>