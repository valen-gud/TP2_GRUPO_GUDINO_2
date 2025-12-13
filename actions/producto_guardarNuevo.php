<?php
session_start();
require_once "../class/conexion.php";

if ($_SESSION['rol'] != 1) {
    header("Location: ../index.php");
    exit;
}

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen_url'];

$conexion = new Conexion();
$pdo = $conexion->getConexion();

$sql = "INSERT INTO productos (nombre, descripcion, precio, imagen_url)
        VALUES ('$nombre', '$descripcion', '$precio', '$imagen')";

$pdo->query($sql);

header("Location: ../views/Admin/productos_admin.php");
