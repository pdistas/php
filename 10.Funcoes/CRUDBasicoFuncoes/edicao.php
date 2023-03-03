<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Controle de alunos</title>
</head>

<body>

<a href="index.html">Home</a> | <a href="consulta.php">Consulta</a>
<hr>

<h2>Edição de Alunos</h2>

</body>
</html>

<?php

include("bd.php");

if (!isset($_POST["raAluno"])) {
    echo "Selecione o aluno a ser editado!";
} else {
    $ra = $_POST["raAluno"];

    try {

        $stmt = buscarEdicao($ra);

        $edificacoes = "";
        $enfermagem = "";
        $geodesia = "";
        $informatica = "";
        $mecanica = "";
        $qualidade = "";

        while ($row = $stmt->fetch()) {

            //para setar o curso correto no combo
            if ($row['curso'] == "Edificações") {
                $edificacoes = "selected";
            } else if ($row['curso'] == "Enfermagem") {
                $enfermagem = "selected";
            } else if ($row['curso'] == "GeoCart") {
                $geodesia = "selected";
            } else if ($row['curso'] == "Informática") {
                $informatica = "selected";
            } else if ($row['curso'] == "Mecânica") {
                $mecanica = "selected";
            } else if ($row['curso'] == "Qualidade") {
                $qualidade = "selected";
            }

            echo "<form method='post' action='altera.php'>\n
            RA:<br>\n
            <input type='text' size='10' name='ra' value='$row[ra]' readonly><br><br>\n
            Nome:<br>\n
            <input type='text' size='30' name='nome' value='$row[nome]'><br><br>\n
            Curso:<br>\n
            <select name='curso'>\n
                <option></option>\n
                 <option value='Edificações' $edificacoes>Edificações</option>\n
                <option value='Enfermagem' $enfermagem>Enfermagem</option>\n
                <option value='GeoCart' $geodesia>Geodésia e Cartografia</option>\n
                <option value='Informática' $informatica>Informática</option>\n
                <option value='Mecânica' $mecanica>Mecânica</option>\n
                 <option value='Qualidade' $qualidade>Qualidade</option>\n
             </select><br><br>\n        
             <input type='submit' value='Salvar Alterações'>\n        
             <hr>\n
            </form>";
        }

    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

}

?>