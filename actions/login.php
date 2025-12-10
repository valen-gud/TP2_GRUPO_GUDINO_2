<?php // verifica el rol, redirige y guarda sesion
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$rol = $_POST['rol'];

$_SESSION['usuario'] = $email;
$_SESSION['rol'] = $rol;

if ($rol === 'admin') {
    header("Location: ../views/admin.php");
} else {
    header("Location: ../views/shop.php");
}
exit;
