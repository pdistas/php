<?php
/**
 * Polimorfismo
 */

class Animal {
    public function falar() {
        return "Som";
    }

    public function mover() {
        return "Anda";
    }
}


class Cachorro extends Animal {
    public function falar() {
        return "auau ";
    }
}

class Gato extends Animal {
    public function falar() {
        return "miau";
    }
}

class Passaro extends Animal {
    public function falar() {
        return "piu piu";
    }

    public function mover() {
        return "Voa e " . parent::mover();
    }
}

$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "------------------------------------------<br>";

$tom = new Gato();
echo $tom->falar() . "<br>";
echo $tom->mover() . "<br>";

echo "------------------------------------------<br>";

$piupiu = new Passaro();
echo $piupiu->falar() . "<br>";
echo $piupiu->mover() . "<br>";
?>