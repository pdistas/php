<?php
/**
 * A função file_get_contents() lê o conteúdo de um arquivo para uma string.
 * Esta função é a maneira recomendada para ler o conteúdo de um arquivo em uma string,
 * porque ela usa técnicas de mapeamento de memória, se isso for suportado pelo servidor, para melhorar o desempenho.
 *
 * lê o arquivo inteiro sem precisar informar limite da leitura e já faz o fclose.
 */

    echo file_get_contents("teste.txt");
?>