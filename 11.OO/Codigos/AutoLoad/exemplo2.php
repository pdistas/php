<?php

/* Evita a necessidade de fazer require de todos os arquivos na hierarquia da classe Fusca.
   Faz isso automaticamente qd a instanciamos e permite fazer (via spl_autoload_register) o require de classes em
   outras pastas, como no caso da pasta Abstratas */

function incluirClasses($nomeClasse) {
    if(file_exists($nomeClasse.".php") == true) {
        require_once($nomeClasse.".php");
    }
}

//registrando no autoload a chamada da função incluir classes e da função anonima que deve incluir classes de outras pastas
spl_autoload_register("incluirClasses");
spl_autoload_register(function ($nomeClasse) {
 if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . "php") == true) {
     require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . "php");
 }
});

//instanciando
$carro = new Fusca();
$carro->acelerar(100);

?>