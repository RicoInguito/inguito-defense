<?php

include 'main.php';

class Movie extends Database 
{
    public $tblname = "movie";

    public function createTable()
    {
        $tbl = "CREATE TABLE IF NOT EXISTS $this->tblname(
            id int primary key auto_increment,
            movie_name varchar(199) not null,
            author varchar(199) not null,
            genre varchar(199) not null
             )";
    
             $this->conn->query($tbl);
            
    }
    
    public function getAll()
    {
        $s = "SELECT * FROM $this->tblname";
         return  $this->conn->query($s);
    }


    public function insert($mn, $a, $g)
    {
        $in = "INSERT INTO $this->tblname(movie_name, author, genre)
        values(NULL, '$mn','$a', '$g)";
         
       return $this->conn->query($in);
       var_dump($this->conn->error);
    }
}
$province=new Movie();
