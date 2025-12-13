<?php
session_start();
require_once "../../class/conexion.php";

if ($_SESSION['rol'] != 1) {
    header("Location: ../../index.php");
    exit;
}

$id = $_GET['id'];

$conexion = new Conexion();
$pdo = $conexion->getConexion();

$producto = $pdo->query("SELECT * FROM productos WHERE id = $id")->fetch();
?>

<h2>Editar producto</h2>

<form action="../../actions/producto_actualizar.php" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?= $producto['id'] ?>">

    <label>Nombre</label><br>
    <input type="text" name="nombre" value="<?= $producto['nombre'] ?>"><br><br>

    <label>Descripción</label><br>
    <textarea name="descripcion"><?= $producto['descripcion'] ?></textarea><br><br>

    <label>Precio</label><br>
    <input type="number" name="precio" value="<?= $producto['precio'] ?>"><br><br>

    <label>Imagen actual</label><br>
    <img src="../../img/<?= $producto['imagen_url'] ?>" width="150"><br><br>

    <label>Cambiar imagen (opcional)</label><br>
    <input type="file" name="imagen"><br><br>

    <input type="hidden" name="imagen_actual" value="<?= $producto['imagen_url'] ?>">

    <button type="submit">Actualizar</button>

</form>


<a href="productos_admin.php">Volver</a>