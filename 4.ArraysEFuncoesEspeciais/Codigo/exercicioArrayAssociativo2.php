<?php
    // passar turma via get na url ou usar o exercicioArrayAssociativo2-form.html

        $notas = array("12345"=>array("DAW"=>7.5,"DDM"=>6.0,"DAD"=>8.0),
                   "54321"=>array("DAW"=>9.0,"DDM"=>8.5,"DAD"=>9.0),
                   "15234"=>array("DAW"=>6.5,"DDM"=>4.5,"DAD"=>7.0)
             );


    $ra = $_GET["ra"];
    $disc = $_GET["disc"];

    if (array_key_exists($ra, $notas) && (array_key_exists($disc, $notas[$ra]))) {

        echo "<h1>Notas do aluno RA: " . $ra . "</h1>";
        echo "<hr>";

        echo $disc . ": " . $notas[$ra][$disc] . "<br>";

        foreach($notas[$ra] as $notasAluno) {
            echo $notasAluno . "<br>";
        }

    } else {
        echo "<span style='color:red;'>Turma ou Disciplina Inexistente(s)</span>";
    }