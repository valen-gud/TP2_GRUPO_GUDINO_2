<?php
require_once "../class/conexion.php";

$conexion = new Conexion();
$pdo = $conexion->getConexion();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// rol 0 = usuario común
$sql = "INSERT INTO usuarios (name, email, password, rol)
        VALUES ('$name', '$email', '$password', 0)";

$pdo->query($sql);

header("Location: ../index.php");
exit;
