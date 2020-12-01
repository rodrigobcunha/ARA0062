<?php

class Bd {
    
    private $dsn, $user, $password, $conn;
    
    function __construct() {
        $this->dsn = 'mysql:dbname=id15496167_trabalho;host=localhost';
        $this->user = 'id15496167_trabalho3006';
        $this->password = 'oY1+$*m]C$N-lU0d';
        
        try {
            $this->conn = new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
    
    /**
     * Rodar uma consulta select
     **/
    function query($sql) {
       try {
           return $this->conn->query($sql);
        } catch (PDOException $e) {
            echo 'Query failed: ' . $e->getMessage();
        }
        
        
    }
    
    /**
     * Executar sql = insert, update, delete
     * */
    function exec($sql){
         try {
           return $this->conn->exec($sql);
        } catch (PDOException $e) {
            echo 'Exec failed: ' . $e->getMessage();
        }
        
    }
}


?>