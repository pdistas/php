<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Controle de alunos</title>

    <style>
        #sucess {
            color: green;
            font-weight: bold;
        }

        #error {
            color: red;
            font-weight: bold;
        }

        #warning {
            color: orange;
            font-weight: bold;
        }
    </style>

</head>

<body>

<h2>Cadastro de Alunos</h2>

<div>
    <form method="post">

        RA:<br>
        <input type="text" size="10" name="ra"><br><br>

        Nome:<br>
        <input type="text" size="30" name="nome"><br><br>

        Curso:<br>
        <select name="curso">
            <option></option>
            <option value="Edificações">Edificações</option>
            <option value="Enfermagem">Enfermagem</option>
            <option value="GeoCart">Geodésia e Cartografia</option>
            <option value="Informática">Informática</option>
            <option value="Mecânica">Mecânica</option>
            <option value="Qualidade">Qualidade</option>
        </select><br><br>

        <input type="submit" value="Cadastrar">

        <hr>

    </form>
</div>

</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {          
            $ra = $_POST["ra"];
            $nome = $_POST["nome"];
            $curso = $_POST["curso"];

            if ((trim($ra) == "") || (trim($nome) == "")) {
                echo "<span id='warning'>RA e nome são obrigatórios!</span>";
            } else {
                echo "<span id='sucess'>Dados cadastrados com sucesso!</span>";               
            }
    }
?>