<?php
/**
 * Encapsulamento e Herança
 */

class Pessoa {

    //atributos
    public $nome = "Simone"; //todos
    protected $idade = 18; //essa classe e as que a herdam
    private $senha = "123456"; //apenas essa classe

    //métodos
    public function verDados() {
        echo get_class();
        echo $this->nome ."<br>";
        echo $this->idade ."<br>";
        echo $this->senha ."<br>";
    }

}

class Programador extends Pessoa {
    
    public function verDados() {
        echo get_class() ."<br>"; //para ver que classe está executando o método
        echo $this->nome ."<br>";
        echo $this->idade ."<br>";
        echo $this->senha ."<br>"; //não consegue exibir pq é atributo privado, visível apenas na classe mãe
    } 

}

//criando/instanciando objetos
$pessoa = new Programador();

$pessoa->verDados(); //funciona pq o método foi herdado e lá na classe mãe o atributo privado pode ser acessado pelo método dela

