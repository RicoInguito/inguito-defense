<?php

class Database 
{
    public $conn;
    public $dbname = "system";

    public function __construct()
     {
        $this->conn=new mysqli('localhost', 'root', '');
        $create="CREATE DATABASE IF NOT EXISTS $this->dbname";
        $this->conn->query($create);
        $use="USE $this->dbname";
        $this->conn->query($use);

        var_dump($this->conn->error);
    }
}
