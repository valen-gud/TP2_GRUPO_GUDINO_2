<?php

class conexion{


    private $servidor = "localhost";
    private $usuario = "root";
    private $pass = "";
    private $dbname = "caprishoes";
    private $conn = null;

    public function __construct(){
        $dsn = "mysql:host=$this->servidor;dbname=$this->dbname";
        $this->conn = new PDO($dsn, $this->usuario, $this->pass);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    public function getConexion(){
        return $this->conn;
    }
}