<?php
require_once "../../class/conexion.php";

$conexion = new Conexion();
$pdo = $conexion->getConexion();

$sql = "SELECT * FROM usuarios";
$usuarios = $pdo->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminitrador | Capri Shoes</title>
</head>

<body>
    <?php
    session_start();

    if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 1) {
        header("Location: ../../index.php");
        exit;
    }

    ?>

    <h2>Panel de Administración</h2>

    <a href="productos_admin.php">Administrar productos</a><br><br>
    <a href="usuarios_admin.php">Ver usuarios ingresados</a>



</body>

</html>