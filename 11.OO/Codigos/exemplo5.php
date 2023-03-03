<?php
/**
 * Encapsulamento
 */

class Pessoa {

    //atributos
    public $nome = "Simone"; //todos
    protected $idade = 18; //essa classe e as que a herdam
    private $senha = "123456"; //apenas essa classe

    //métodos
    public function verDados() {
        echo $this->nome ."<br>";
        echo $this->idade ."<br>";
        echo $this->senha ."<br>";
    }

} //fim classe Pessoa

//criando/instanciando objetos

$pessoa = new Pessoa();

/*echo $pessoa->nome;  //funciona pq o atributo é público
echo $pessoa->idade; //não funciona pq o atributo é protegido
echo $pessoa->senha; //não funciona pq o atributo é privado
*/

//solução - usar o método público para ver os dados
$pessoa->verDados();