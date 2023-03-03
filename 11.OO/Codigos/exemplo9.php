<?php
/**
 * Classes abstratas - semelhantes a interface, mas aqui definimos os métodos e não apenas as assinaturas
 * Não é instaciada e sim estendida/herdada
 */

//classe abstrata que também está dando a implmentação dos métodos da interface
abstract class Animal {
    public $nome;
    public $idade;

    public function descreverAnimal() {
        return $this->nome . ", " . $this->idade . " anos";
    }

    abstract public function agir();
} //fim class Animal


class Cachorro extends Animal {
    public function agir() {
        return "Au Au! <br>";
    }

    public function descreverAnimal() {
        return parent::descreverAnimal() . " e eu sou um cão!<br>";
    }
} //fim class Cachorro

$dog = new Cachorro();

$dog->nome="Totó";
$dog->idade = 5;

echo ($dog->agir());
echo ($dog->descreverAnimal());

?>