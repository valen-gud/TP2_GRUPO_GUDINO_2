<?php
session_start();
require_once "../../class/conexion.php";

if ($_SESSION['rol'] != 1) {
    header("Location: ../../index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar producto</title>
    <link rel="shortcut icon" href="../../favicon2.ico.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/estilos_productos_admin.css">
    <link rel="stylesheet" href="../../css/estilos_productos_editar_admin.css">
    <link rel="stylesheet" href="../../css/estilos_nav_admin.css">
    <link rel="stylesheet" href="../../css/estilos_footer_admin.css">
</head>

<body>

    <header>
        <?php require_once "../../componentes/nav_admin.php"; ?>
    </header>
    <main class="container my-5">
        <h2 class="text-center">Nuevo producto</h2>

        <div>
            <a class="btn botonVolverAdmin"  href="productos_admin.php">Volver atrás</a>
        </div>

        <hr class="mt-3">

        <form method="post" action="../../actions/producto_guardarNuevo.php" enctype="multipart/form-data" class="card p-4 shadow">

            <div class="mb-3">
                <label class="form-label">Nombre del producto</label>
                <input type="text" name="nombre" class="form-control" placeholder="Ej: Chatitas Rare" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" rows="4" placeholder="Descripción del producto nuevo" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="number" name="precio" class="form-control" placeholder="Ej: 69990" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Imagen del producto</label>
                <input type="file" name="imagen" class="form-control" required>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn botonActualizar">
                Guardar producto
                </button>
            </div>

        </form>

    </main>




</body>

</html>