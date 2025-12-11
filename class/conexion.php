<?php

class Conexion
{


    private $servidor = "localhost";
    private $usuario = "root";
    private $pass = "";
    private $dbname = "caprishoes";
    private $conn = null;

    public function __construct()
    {
        try {
            $dsn = "mysql:host={$this->servidor};dbname={$this->dbname}";
            $this->conn = new PDO($dsn, $this->usuario, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            require_once "funciones.php";
            mostrarError404();
        }
    }


    public function getConexion()
    {
        return $this->conn;
    }
}
