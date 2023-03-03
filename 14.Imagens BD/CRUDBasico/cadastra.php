<!-- REFERÊNCIAS
  https://www.devmedia.com.br/upload-de-imagens-em-php-e-mysql/10041
  http://rafaelcouto.com.br/salvar-imagem-no-banco-de-dados-com-php-mysql/
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Controle de alunos</title>

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

<a href="index.html">Home</a>
<hr>

<h2>Cadastro de Alunos</h2>
<div>

    <!-- form com enctype para indicar que serão enviados dados em binário além de texto -->
    <form method="POST" enctype="multipart/form-data">

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

        Foto:<br>
        <input type="file" name="foto" accept="image/gif, image/png, imagem/jpg"><br><br>

        <input type="submit" value="Cadastrar">

        <hr>

    </form>
</div>

</body>
</html>

<?php

   include("conexaoBD.php");

    // Constante para o tam máximo de arquivo de foto - 2 MB
    define('TAMANHO_MAXIMO', (2 * 1024 * 1024));

    if ($_SERVER["REQUEST_METHOD"] === 'POST') {

        try {
            //inserindo dados
            $ra = $_POST["ra"];
            $nome = $_POST["nome"];
            $curso = $_POST["curso"];

            //foto
            $foto = $_FILES['foto'];
            $nomeFoto = $foto['name'];
            $tipoFoto = $foto['type'];
            $tamanhoFoto = $foto['size'];

            if ((trim($ra) == "") || (trim($nome) == "")) {
                echo "<span id='warning'>RA e nome são obrigatórios!</span>";

            } else if ( ($nomeFoto != "") && (!preg_match('/^image\/(jpeg|png|gif)$/', $tipoFoto)) ) { //validação tipo arquivo
            echo "<span id='error'>Não é uma imagem válida!</span>";

            } else if ($tamanhoFoto > TAMANHO_MAXIMO) { //validação tamanho arquivo
                echo "<span id='error'>A imagem deve possuir no máximo 2 MB</span>";

            } else {
                //verificando se o RA informado já existe no BD para não dar exception
                $stmt = $pdo->prepare("select * from alunos where ra = :ra");
                $stmt->bindParam(':ra', $ra);
                $stmt->execute();

                $rows = $stmt->rowCount();

                if ($rows <= 0) {

                    if ($nomeFoto == "") {
                        $fotoBinario = null;
                    } else {
                        // Lendo o conteudo do arq para uma var
                        $fotoBinario = file_get_contents($foto['tmp_name']);
                    }

                    $stmt = $pdo->prepare("insert into alunos (ra, nome, curso, foto) values(:ra, :nome, :curso, :foto)");
                    $stmt->bindParam(':ra', $ra);
                    $stmt->bindParam(':nome', $nome);
                    $stmt->bindParam(':curso', $curso);
                    $stmt->bindParam(':foto', $fotoBinario);
                    $stmt->execute();

                    echo "<span id='sucess'>Aluno Cadastrado!</span>";
                } else {
                    echo "<span id='error'>Ra já existente!</span>";
                }
            }

        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
?>