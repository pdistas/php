<?php

//model
class Aluno {

    //atributos
    private $ra;
    private $nome;
    private $curso;

    //getters
    public function getRa() {
        return $this->ra;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCurso() {
        return $this->curso;
    }

    //setters
    public function setRa($ra)  {
        $this->ra = $ra;
    }

    public function setNome($nome)  {
        $this->nome = $nome;
    }

    public function setCurso($curso)  {
        $this->curso = $curso;
    }

}

?>