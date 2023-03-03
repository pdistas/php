<?php
/**
 * Métodos mágicos
 * São métodos que são invocados quando trabalhamos com as propriedades e métodos de um objeto (instância de uma classe)
  */

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    //É o construtor. Ele é chamado quando instanciamos uma classe, ou seja, quando escrevemos new.
    public function __construct($logradouro, $numero, $cidade) {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->cidade = $cidade;
    }

    public function __toString(){
        return $this->logradouro . "<br>" . $this->numero . "<br>" . $this->cidade . "<br>";
    }

    //Executado no encerramento de uma execução de um script
    public function __destruct() {
        echo "destruir";
    }

}//fim classe Endereço

$meuEndereco = new Endereco("Rua Paschoal Marmo",  "1888", "Limeira");

//funciona apenas se os atributos forem públicos
//echo $meuEndereco->logradouro . "<br>";
//echo $meuEndereco->numero . "<br>";
//echo $meuEndereco->cidade . "<br>";


//funciona pq o método toString. O PHP não consegue converter a classe em uma string.
echo $meuEndereco;