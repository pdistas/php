<?php


/*para que os alunos consigam ver o funcionamento, primeiro executar apenas essa linha para a pasta ser criada.
Depois, copiar alguuns arquivos para essa pasta criada e descomentar o código para remoção dos arquivos*/

if (!is_dir("images")) mkdir("images");


foreach (scandir("images") as $item) {
    if (!in_array($item, array(".", ".."))) { //para retirar do array o dir . e o dir ..
        unlink("images/" . $item);
    }
}

echo "Ok!"

?>