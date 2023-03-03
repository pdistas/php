<?php

//interface
interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

//classe abstrata que também está dando a implmentação dos métodos da interface
abstract class Automovel implements Veiculo {

    public function acelerar($velocidade) {
        echo "<br>O veículo acelerou até " . $velocidade . "km/h";
    }

    public function frenar($velocidade) {
        echo "<br>O veículo frenou até " . $velocidade . "km/h";
    }

    public function trocarMarcha($marcha) {
        echo "<br>O veículo engatou a marcha " . $marcha;
    }

}
?>