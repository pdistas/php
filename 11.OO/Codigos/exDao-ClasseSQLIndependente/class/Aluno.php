<?php

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

    //carrega dados do aluno a partir do RA
    public function loadById($ra) {
        $sql = new Sql();
        $results = $sql->select("select * from alunos where ra = :RA", array(":RA"=>$ra)); //de acordo com a assinatura do metodo Sql.select()

        if (count($results) > 0) {
            $row = $results[0]; //que já vem a linha selecionada com os nomes das colunas, conforme método Sql->select()

            $this->setRA($row['ra']);
            $this->setNome($row['nome']);
            $this->setCurso($row['curso']);
        }
    }

    //método para exibir os dados selecionados - chamado qd der um echo no obj
    public function __toString() {
        /*return json_encode(array(
            "ra"=>$this->getRa(),
            "nome"=>$this->getNome(),
            "curso"=>$this->getCurso()
        ));   - ou  - */


        return "<b>RA:</b>" . $this->getRa()    . "<br>
            <b>Nome:</b>"   . $this->getNome()  . "<br>
            <b>Curso:</b>"  . $this->getCurso() . "<br>";
    }

    //lista todos os alunos
    public function listAlunos() {
        $sql = new Sql();
        return $sql->select("select * from alunos");
    }

    //insere aluno
    public function insereAluno() {
        $sql = new Sql();

        //verifica se já existe PK
        $results = $sql->select("select * from alunos where ra = :RA",
            array(':RA'=>$this->getRa()));

        if (count($results) > 0) {
           echo "Ra já existente!";
       } else { //insere
           $sql->query("insert into alunos (ra, nome, curso) values(:RA, :NOME, :CURSO)",
               array(':RA'=>$this->getRa(),
                     ':NOME'=>$this->getNome(), ':CURSO'=>$this->getCurso()));

           echo "Aluno inserido!";
       }

    }

    //altera aluno
    public function update($nome, $curso) {
        $this->setNome($nome);
        $this->setCurso($curso);

        $sql = new Sql();

        $sql->query("update alunos set nome = :NOME, curso = :CURSO where ra = :RA",
            array(':NOME'=>$this->getNome(), ':CURSO'=>$this->getCurso(), ':RA'=>$this->getRA()));


    }

    //deleta aluno
    public function delete() {
        $sql = new Sql();

        $sql->query("delete from alunos where ra = :RA",
            array(':RA'=>$this->getRA()));

        $this->setRa("");
        $this->setNome("");
        $this->setCurso("");
    }

}

?>