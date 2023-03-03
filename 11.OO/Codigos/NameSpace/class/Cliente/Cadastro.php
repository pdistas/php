<?php

namespace Cliente;

class Cadastro extends \Cadastro {

    public function registrarVenda() {
        echo "Foi registrada uma venda para o Cliente " . $this->getNome();
    }
}