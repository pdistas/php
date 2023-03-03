<?php
/**
 * Interface - contrato que obriga o programador a implementar os métodos definidos na interface
 */

interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
} //Veiculo

class Fusca implements Veiculo {

    public function acelerar($velocidade) {
        echo "<br>O veículo acelerou até " . $velocidade . "km/h";
    }

    public function frenar($velocidade) {
        echo "<br>O veículo frenou até " . $velocidade . "km/h";
    }

    public function trocarMarcha($marcha) {
        echo "<br>O veículo engatou a marcha " . $marcha;
    }

} //fim Fusca

$carro = new Fusca();
$carro->trocarMarcha(1);
$carro->acelerar(100);
$carro->frenar(50);

?>