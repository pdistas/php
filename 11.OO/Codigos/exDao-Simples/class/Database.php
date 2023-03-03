<?php

//config
class Database {

    public function conecta() {
        
        try {                
            $pdo = new PDO('mysql:host=localhost;dbname=simone;charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);            
        } catch (PDOException $e) {
            echo ('Impossível conectar BD : ' . $e . '<br>');
        }

        return $pdo;
    }

}

?>