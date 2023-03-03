<?php
/**
 * Métodos estáticos - podem ser acessados sem necessidade de instanciar a classe
 */

    class Documento {
        //atributo
        private $numero;

        //métodos getters/setters
        public function getNumero() {
            return $this->numero;
        }

        public function setNumero($numero) {
            $resultado = Documento::validarCPF($numero);

            if ($resultado === false) {
                throw new Exception("CPF inválido!", 1);
            }
            $this->numero = $numero;
        }

        public static function validarCPF($cpf):bool { //não precisa explicar a logica, podem copiar
            if(empty($cpf)) {
                return false;
            }

            $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

            $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);


            if (strlen($cpf) != 11) {
                echo "length";
                return false;
            }

            else if ($cpf == '00000000000' ||
                $cpf == '11111111111' ||
                $cpf == '22222222222' ||
                $cpf == '33333333333' ||
                $cpf == '44444444444' ||
                $cpf == '55555555555' ||
                $cpf == '66666666666' ||
                $cpf == '77777777777' ||
                $cpf == '88888888888' ||
                $cpf == '99999999999') {
                return false;

            } else {

                for ($t = 9; $t < 11; $t++) {

                    for ($d = 0, $c = 0; $c < $t; $c++) {
                        $d += $cpf{$c} * (($t + 1) - $c);
                    }
                    $d = ((10 * $d) % 11) % 10;
                    if ($cpf{$c} != $d) {
                        return false;
                    }
                }

                return true;
            }
        }

    } //classe

/*
    //criando/instanciando docs
    $cpf = new Documento();
    //$cpf->setNumero("39710967002"); //cpf válido
    $cpf->setNumero("334343243232432"); //cpf inválido
    var_dump($cpf);
*/

    //ou, validar direto pelo método estático - para executar um método estático usa-se :: ao invés de ->
    var_dump(Documento::validarCPF("123456"));

