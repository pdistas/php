<?php
/**
* Heranca
 */

//classe documento - classe pai
class Documento {

    private $numero;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($n) {
        $this->numero = $n;
    }

} //fim classe Documento

//subclasse ou classe filha
class CPF extends Documento {

    public function validar():bool {
        $numeroCPF = $this->getNumero();
        //aqui poderia vir um código para validar o cpf
        return true;
    }

} //fim classe CPF

//instanciando
$doc = new CPF();
$doc->setNumero("123456789-09");
echo ($doc->validar());
echo "<br>";
echo $doc->getNumero();