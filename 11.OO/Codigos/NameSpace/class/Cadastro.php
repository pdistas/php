<?php

class Cadastro {

    //atributos
    private $nome;
    private $email;
    private $senha;

    //getters - setters
    public function getNome():string {
        return $this->nome;
    }

    public function getEmail():string {
        return $this->email;
    }

    public function getSenha():string  {
        return $this->senha;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha)  {
        $this->senha = $senha;
    }

    //echo não mostra objeto, mas temos o método mágico __toString que sabe exibir o obj como String
    public function __toString() {
     return json_encode(
         array(
             "nome"=>$this->getNome(),
             "email"=>$this->getEmail(),
             "senha"=>$this->getSenha()
         )
     );
    }

}

?>