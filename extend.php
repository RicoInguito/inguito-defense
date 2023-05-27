<?php
 include 'main.php';

class Dbname extends Database

{
    public function db():string
    {
        $dis ="CREATE DATABASE IF NOT EXISTS $this->dbName";
        
        return $this->conn->query($dis);
    }
}

?>