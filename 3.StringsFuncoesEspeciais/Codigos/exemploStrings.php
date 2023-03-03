<?php

    $texto =  "  cotil - unicamp  ";

    //trim — Retira espaço no ínicio e final de uma string
    echo "-" . trim($texto) . "-" . "<br>";;

    //Retira espaço em branco (ou outros caracteres) do final da string
    echo "-" . ltrim($texto) . "-" . "<br>";

    //ltrim — Retira espaços em branco (ou outros caracteres) do início da string
    echo "-" . rtrim($texto) . "-" . "<br>";

    //tudo maiúsculo
    echo strtoupper($texto) . "<br>";

    //tudo minúsculo
    echo strtolower($texto) . "<br>";

    //1a letra maiúscula
    echo ucfirst($texto) . "<br>";

    //1as letras maiúsculas
    echo ucwords($texto) . "<br>";

    //retorna o tamanho da String
    echo strlen($texto) . "<br>";

    //reversão da String
    echo strrev($texto) . "<br>";

    //quebra a string a cada 3 caracteres
    $str = str_split($texto, 3);
    print_r($str);

    echo "<br>";

    //Encontra a posição da primeira ocorrência de uma string
    echo strpos($texto, "unicamp") . "<br>";

    $email = "simone@cotil.unicamp.br";

    //retorna a String após o caracter informado "@"
    echo strchr($email, "@") . "<br>";

    //retorna a String antes do caracter informado "@"
    echo strchr($email, "@", true) . "<br>";

    //Retorna uma parte de uma string
    echo substr('abcdef', 1) . "<br>";     // bcdef
    echo substr('abcdef', 1, 3) . "<br>"; // bcd

    echo str_replace("i", "X", $texto) . "<br>";

    //casting
    $foo = "0";  // $foo é string (ASCII 48)
    $foo += 2;   // $foo é agora um interio (2)
    $foo = $foo + 1.3;  // $foo é agora um float (3.3)
    echo $foo;
    echo "<br>";

    $senha = "minhasenha";

    /*
    md5 - gera uma cópia criptografada - mão única
    ** algoritmo de um hash de 128 bits - 32 caracteres
    ** -> problema: para a mesma string, sempre o mesmo resultado. Fácil achar na internet listas com resultados. 
    ** -> solução: concatenar um salt
    */
    echo "<br> *** md5 ***<br>";
    $x = md5($senha);
    echo($x);
    echo "<br>";    

    if (md5($senha) == $x) {
        echo "Senha ok!<br><br>";
    }   

    //com salt - Uma string de salt para base da encriptação
    $salt = "c0t1lUn1camp";
    $senha = $senha . $salt;
    echo "senha = " . $senha;
    echo "<br>";  

    $x = md5($senha);
    echo($x);
    echo "<br>";  

    if (md5($senha) == $x) {
        echo "Senha ok!<br><br>";
    }   

    /*
      ** sha1 - gera uma cópia criptografada - mão única
      ** 160 bits - 40 caracteres
      ** considerar a mesma regra de segurança com o uso de salt, abordarda no md5 
    */
    echo "<br> *** sha1 ***<br>";
    $x = sha1($senha);
    echo $x;
    echo "<br>";

    if (sha1($senha) == $x) {
        echo "Senha ok!<br><br>";
    }         

    /*crypt - gera uma cópia criptografada
      ** retornará uma string criptografada usando o algoritmo de encriptação Unix Standard DES-based ou ou algoritmos alternativos disponíveis no sistema.
    */
    echo "<br> *** crypt ***<br>";

    // o 2o parâmetro é o salt, que se não fornecido, será gerado randomicamente pelo PHP cada vez que chamar esta função.
    $x = crypt($senha, "");
    //$x = crypt($senha, "c0t1lUn1camp");
    echo $x;
    echo "<br>";

    if (crypt($senha, "") == $x) {
        echo "Senha ok!<br><br>";
    }



   
