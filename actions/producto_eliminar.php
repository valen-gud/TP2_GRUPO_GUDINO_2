<?php
session_start();
require_once "../class/conexion.php";

if ($_SESSION['rol'] != 1) {
    header("Location: ../index.php");
    exit;
}

$id = $_GET['id'];

$conexion = new Conexion();
$pdo = $conexion->getConexion();

$pdo->query("DELETE FROM productos WHERE id = $id");

header("Location: ../views/Admin/productos_admin.php");
