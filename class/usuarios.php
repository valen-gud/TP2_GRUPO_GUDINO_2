<?php 

require_once 'conexion.php';

class Usuario{

    private $id;
    private $nombre;
    private $email;

    public function __construct() {}

    public function obtenerUsuarios()
    {
        $conexion = (new conexion())->getConexion();
        $query = "SELECT * FROM `usuarios`";
        $stmt = $conexion->query($query);
        $usuarios = $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
        return $usuarios;
    }
}


?>