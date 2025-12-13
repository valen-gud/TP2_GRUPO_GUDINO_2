<?php
session_start();
require_once "../class/conexion.php";

// crear conexión
$conexion = new Conexion();
$pdo = $conexion->getConexion();

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$stmt = $pdo->query($sql);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario) {

    if ($password == $usuario['password']) {

        $_SESSION['usuario'] = $usuario['email'];
        $_SESSION['rol'] = $usuario['rol'];

        if ($usuario['rol'] == 1) {
            header("Location: ../views/admin/admin.php");
        } else {
            header("Location: ../views/shop.php");
        }
        exit;
    }
}

header("Location: ../views/404.php");
exit;
