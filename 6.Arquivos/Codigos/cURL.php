<?php

    $cep = "13484332";
    $link = "https://viacep.com.br/ws/$cep/json/";

    $ch = curl_init($link);

    //setando opções da biblioteca
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //indica que espero um retorno
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //p/ não precisar validar https

    $response = curl_exec($ch);

    curl_close($ch);

    $dados = json_decode($response, true); //tranforma o resultado json em um array

    print_r($dados);

    echo $dados["logradouro"];

    ?>