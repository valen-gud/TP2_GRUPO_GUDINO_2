<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
     <link rel="shortcut icon" href="../favicon.ico.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos_contacto.css">
    <?php //vista solo de usuiarios compradores ------------

    session_start();

    if (!isset($_SESSION['usuario'])) {
        header("Location: ../index.php");
        exit;
    }
    ?>
</head>

<body>
    <header>
        <?php require_once "../componentes/nav.php" ?>
    </header>

    <main>
        <H1 class="text-center mt-4 mb-4">CONTACTANOS</H1>
        <form class="text-center m-5" action="../actions/contacto_acc.php" method="POST">
            <label class="form-label" for="nombre">Nombre completo</label><br>
            <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido" required minlength="4"><br>

            <label class="form-label" for="email">Email</label><br>
            <input class="form-control" type="email" placeholder="ejemplo@ejemplo.com" required id="email" name="email"><br>

            <label class="form-label" for="telefono">Teléfono</label><br>
            <input class="form-control" type="tel" id="telefono" name="telefono" required pattern="[0-9]{8,15}" placeholder="Solo números"><br>

            <label class="form-label" for="mensaje">Mensaje</label><br>
            <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Hola!..." rows="4" required minlength="6"></textarea><br>

            <div>
                <input class="btn btnCapri mt-4" type="submit" value="Enviar">
            </div>
            <div>
                <input class="btn btnBorrar mt-4" type="reset" value="Borrar">
            </div>
        </form>
    </main>

    <footer>
        <?php require_once "../componentes/footer.php" ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>