<?php

    function conectarBD() {
        $pdo = new PDO('mysql:host=143.106.241.1;dbname=clRA; charset=utf8', 'ClRA', 'cl*dt');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    function cadastrar($ra, $nome, $curso) {
        try {
            $pdo = conectarBD();
            $rows = verificarCadastro($ra, $pdo);

            if ($rows <= 0) {
                $stmt = $pdo->prepare("insert into alunos (ra, nome, curso) values(:ra, :nome, :curso)");
                $stmt->bindParam(':ra', $ra);
                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':curso', $curso);
                $stmt->execute();
                echo "<span id='sucess'>Aluno Cadastrado!</span>";
            } else {
                echo "<span id='error'>Ra já existente!</span>";
            }
        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    function verificarCadastro($ra, $pdo) {
        //verificando se o RA informado já existe no BD para não dar exception
        $stmt = $pdo->prepare("select * from alunos where ra = :ra");
        $stmt->bindParam(':ra', $ra);
        $stmt->execute();

        $rows = $stmt->rowCount();
        return $rows;
    }

    function consultar() {
        $pdo = conectarBD();
        if (isset($_POST["ra"]) && ($_POST["ra"] != "")) {
            $ra = $_POST["ra"];
            $stmt = $pdo->prepare("select * from alunos where ra= :ra order by curso, nome");
            $stmt->bindParam(':ra', $ra);
        } else {
            $stmt = $pdo->prepare("select * from alunos order by curso, nome");
        }

        $stmt->execute();

        return $stmt;
    }

    function buscarEdicao($ra) {
        $pdo = conectarBD();
        $stmt = $pdo->prepare('select * from alunos where ra = :ra');
        $stmt->bindParam(':ra', $ra);
        $stmt->execute();
        return $stmt;
    }

    function alterar($ra, $novoNome, $novoCurso) {
        try {
            $pdo = conectarBD();
            $stmt = $pdo->prepare('UPDATE alunos SET nome = :novoNome, curso = :novoCurso WHERE ra = :ra');
            $stmt->bindParam(':novoNome', $novoNome);
            $stmt->bindParam(':novoCurso', $novoCurso);
            $stmt->bindParam(':ra', $ra);
            $stmt->execute();

            echo "Os dados do aluno de RA $ra foram alterados!";

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function excluir($ra) {
        try {
            $pdo = conectarBD();
            $stmt = $pdo->prepare('DELETE FROM alunos WHERE ra = :ra');
            $stmt->bindParam(':ra', $ra);
            $stmt->execute();

            echo $stmt->rowCount() . " aluno de RA $ra removido!";

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    ?>