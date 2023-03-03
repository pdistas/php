<?php

    class Pessoa {
        //atributo
        public $nome;

        //método
        public function falar() {
            return "O meu nome é " . $this->nome; //não precisa do $ no nome
        }
    }

    //criando/instanciando pessoas
    $pessoa = new Pessoa();
    $pessoa->nome = "Simone";
    echo $pessoa->falar();