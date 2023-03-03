<?php

//controller

require_once('config.php');

class AlunoController {

    function inserir() {

        $ra = $_POST['ra'];
        $nome = $_POST['nome'];
        $curso = $_POST['curso'];

        $conexao = new Database();

        $aluno = new Aluno();
        $aluno->setRa($ra);
        $aluno->setNome($nome);
        $aluno->setCurso($curso);

        $alunoDao = new AlunoDao();
        $alunoDao->add($conexao, $aluno);

    }

    function excluir() {

    }

    function alterar() {

    }

    function buscar() {

    }

}

if ($_POST['acao'] == "inserir") {
    $controller = new AlunoController();
    $controller->inserir();    
}

?>