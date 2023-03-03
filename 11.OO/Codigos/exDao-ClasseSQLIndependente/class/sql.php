<?php

class Sql extends PDO {

    private $conn;

    public function __construct() {        
        $this->conn = new PDO('mysql:host=localhost;dbname=simone;charset=utf8', 'root', '');
    }

    public function setParams($statement, $parameters=array()) {
        foreach ($parameters as $key => $value) {
            $this->setParam($statement, $key, $value);
        }
    }

    //método separado para o caso de necessidade de algum tratamento
    public function setParam($statement, $key, $value) {
        $statement->bindParam($key, $value);
    }

    //executa qualquer query e retorna o resultado da execução - se for select(registros), delete/update/insert(rows afetadas)
    public function query($rawQuery, $params = array()) {
        $stmt =  $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    public function select($rawQuery, $params = array()):array {
        $stmt = $this->query($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC: returns an array indexed by column name as returned in your result set
    }

}

?>