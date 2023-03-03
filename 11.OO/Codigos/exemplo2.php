<?php

    class Carro {
        //atributo
        private $modelo;
        private $motor;
        private $ano;

        //métodos getters/setters
        public function getModelo() {
            return $this->modelo;
        }

        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        public function getMotor():float {
            return $this->motor;
        }

        public function setMotor($motor) {
            $this->motor = $motor;
        }

        public function getAno():int {
            return $this->ano;
        }

        public function setAno($ano) {
            $this->ano = $ano;
        }

        public function exibir() {
            //return array("modelo"=>$this->getModelo(), "motor"=>$this->getMotor(),"ano"=>$this->getAno());

            echo "Modelo: " . $this->getModelo() . "<br> 
                  Motor: " . $this->getMotor() . "<br>
                  Ano: " . $this->getAno();
        }
    } // fim classe Carro

    //criando/instanciando carros
    $carro = new Carro();

    //$carro->modelo ="VW Fusca"; //não funciona pq o atributo é privado
    //echo $carro->modelo;
    
    $carro->setModelo("VW Fusca");
    $carro->setMotor(1.6);
    $carro->setAno(2003);

    //print_r($carro->exibir());    
    $carro->exibir();