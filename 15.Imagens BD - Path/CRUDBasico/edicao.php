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

include("conexaoBD.php");

if (!isset($_POST["raAluno"])) {
    echo "Selecione o aluno a ser editado!";
} else {
    $ra = $_POST["raAluno"];

    try {
        $stmt = $pdo->prepare('select * from alunos where ra = :ra');
        $stmt->bindParam(':ra', $ra);
        $stmt->execute();

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

            $arquivoFoto = $row['arquivoFoto'];

            echo "<form method='post' action='altera.php' enctype='multipart/form-data'>\n
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
             
             Foto:<br>";

            if ($arquivoFoto == null) {
              echo "-<br><br>";
            } else {
              echo  "<img src=".$row['arquivoFoto'] . " width='50px' height='50px'><br><br>";
            }

            echo "
             <input type='file' name='foto'><br><br>
             <input type='submit' value='Salvar Alterações'>\n        
             <hr>\n
            </form>";
        }

    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

}

?>