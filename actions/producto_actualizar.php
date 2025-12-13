<?php
require_once "../class/Conexion.php";

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

$imagen = $_POST['imagen_actual'];

if (!empty($_FILES['imagen']['name'])) {
    $imagen = $_FILES['imagen']['name'];
    move_uploaded_file(
        $_FILES['imagen']['tmp_name'],
        "../img/" . $imagen
    );
}

$conexion = new Conexion();
$pdo = $conexion->getConexion();

$sql = "UPDATE productos 
        SET nombre = ?, descripcion = ?, precio = ?, imagen_url = ?
        WHERE id = ?";

$stmt = $pdo->prepare($sql);
$stmt->execute([$nombre, $descripcion, $precio, $imagen, $id]);

header("Location: ../views/Admin/productos_admin.php");
exit;
?>