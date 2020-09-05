<?php
class dbConfig{
    private $host = "localhost";
    private $name = "root";
    private $pass = "";
    private $db = "student";
    protected $conn = null;

    public function __construct(){
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db;charset=utf8",$this->name,$this->pass);
        }catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }
}