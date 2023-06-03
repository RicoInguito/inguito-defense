<?php

include 'main.php';

class Province extends Database 
{
    public $tblname = "province";

    public function createTable()
    {
        $tbl = "CREATE TABLE IF NOT EXISTS $this->tblname(
            id int primary key auto_increment,
            street varchar(199) not null,
            barangay varchar(199) not null,
            municipality varchar(199) not null
             )";
    
             $this->conn->query($tbl);
            
    }
    
    public function getAll()
    {
        $s = "SELECT * FROM $this->tblname";
         return  $this->conn->query($s);
    }


    public function insert($street, $barangay, $municipality)
    {
        $in = "INSERT INTO $this->tblname(street, barangay, municipality)
        values(NULL, '$street','$barangay', '$municipality)";
         
       return $this->conn->query($in);
       var_dump($this->conn->error);
    }
}
$province=new Province();
