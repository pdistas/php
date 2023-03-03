/* passar turma via get na url */

<?php

    $turmas = array("INFD3"=>array("16117"=>"Amanda Oliveira Santos",
                                   "16557"=>"Bruno Penteado Carrara",
                                   "16563"=>"Cibele Souza de Almeida",
                                   "16119"=>"Danilo Rafhael Resende Malheiro da Silva",
                                   "16121"=>"Érika Vanessa Cavalcanti da Silva"
                                  ),
                    "CTI2"=>array("17427"=>"Diogo Vinicius Oliveira Guimarães",
                                  "17428"=>"Douglas José Figueiredo",
                                  "17429"=>"Emily Da Silva Farias"
                    ),
                    "INFN3"=>array("16227"=>"Andre Ricardo Martins Siqueira Narcizo",
                                   "16573"=>"Andre Schinor Mena Peres",
                                   "16228"=>"Beatriz Santos de Mello",
                                   "16229"=>"Caio Ramos Ballarin",
                                   "16231"=>"Carlos Eduardo Lima"
                                  )
             );

    $turmaParametro = $_GET["turma"];

    if (array_key_exists($turmaParametro, $turmas)) {

        echo "<h1>" . $turmaParametro . "</h1>";
        echo "<hr>";

        foreach($turmas[$turmaParametro] as $aluno) {
            echo $aluno . "<br>";
        }

    } else {
        echo "<span style='color:red;'>Turma inexistente</span>";
    }





