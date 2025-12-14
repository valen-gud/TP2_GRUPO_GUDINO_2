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

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar producto</title>
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

        <h2 class="text-center">Editar producto</h2>

        <div>
            <a class="btn botonVolverAdmin"  href="productos_admin.php">Volver atrás</a>
        </div>

        <hr class="mt-3">

        <div class="mt-5 row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card cardEditar">
                    <div class="card-body">

                        <form action="../../actions/producto_actualizar.php" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?= $producto['id'] ?>">
                            <input type="hidden" name="imagen_actual" value="<?= $producto['imagen_url'] ?>">

                            <div class="mb-3">
                                <label class="form-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control"
                                    value="<?= $producto['nombre'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Descripción</label>
                                <textarea name="descripcion" class="form-control" rows="4" required><?= $producto['descripcion'] ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Precio</label>
                                <input type="number" name="precio" class="form-control"
                                    value="<?= $producto['precio'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Imagen actual</label><br>
                                <img src="../../img/<?= $producto['imagen_url'] ?>"
                                    class="img-fluid rounded border"
                                    style="max-width: 200px;">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Cambiar imagen (opcional)</label>
                                <input type="file" name="imagen" class="form-control">
                            </div>

                                <button type="submit" class="btn botonActualizar">
                                    Actualizar producto
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </main>


    <footer class="mt-5 py-4 footer">
        <?php require_once "../../componentes/footer_admin.php" ?>
    </footer>

</body>

</html>