<?php  

//model
class AlunoDAO {

    function add(Database $conexao, Aluno $aluno) {

    	try {  

    		$pdo = $conexao->conecta();

    		$ra = $aluno->getRa();
    		$nome = $aluno->getNome();
    		$curso = $aluno->getCurso();

            $stmt = $pdo->prepare("insert into alunos (ra, nome, curso) values(:ra, :nome, :curso)");
	    	$stmt->bindParam(':ra', $ra);
	    	$stmt->bindParam(':nome', $nome);
	    	$stmt->bindParam(':curso', $curso);
	    	$stmt->execute();

	    	echo "<b>Aluno cadastrado!</b>";

        } catch (PDOException $e) {
            echo ('<b>Erro ao cadastrar aluno:</b> <br> ' . $e . '<br>');
        }

    }

    function delete(Database $conexao, Aluno $aluno) {

    }

    function update(Database $conexao, Aluno $aluno) {

    }    

    function select(Database $conexao, Aluno $aluno) {

    }        

}

?>