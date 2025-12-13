<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarme</title>
    <link rel="shortcut icon" href="favicon.ico.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos_registro.css">
</head>

<body>
    <h1 class="text-center mt-5 ">Nuevo usuario</h1>

    <div class="contenedorRegistro mt-5">

        <form class=" text-center m-5" action="../actions/registro.php" method="POST">
            <label class="form-label etiquetaLabel mt-3" for="name">Nombre de usuario</label>
            <input class="form-control" type="text" name="name" placeholder="Nombre" required>

            <label class="form-label etiquetaLabel mt-3" for="email">Email</label>
            <input class="form-control" type="email" placeholder="ejemplo@ejemplo.com" required id="email" name="email">

            <label class="form-label etiquetaLabel mt-3" for="password">Contraseña</label>
            <input
                class="form-control" type="password" id="password" name="password" required minlength="8" placeholder="Mínimo 8 caracteres" pattern="(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}">
            <small class="text-muted">
                Debe contener al menos una letra, un número y un caracter especial.
            </small>

            <div class="d-flex gap-3 justify-content-center mt-4">
                <input class="btn botonCapri" type="submit" value="Registrar">
            </div>
        </form>



    </div>
</body>

</html>