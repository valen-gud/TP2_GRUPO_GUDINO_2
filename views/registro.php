<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarme</title>
    <link rel="shortcut icon" href="../favicon.ico.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos_registro.css">
</head>

<body>

    <div class="container mt-5" style="max-width: 500px;">

        <h2 class="text-center mt-5 mb-4">Crear cuenta en Capri Shoes</h2>

        <form action="../actions/registro.php"method="POST"class="card mt-5 p-4 shadow">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre de usuario</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ej: Valentina" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@ejemplo.com" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" type="password" id="password" name="password" required minlength="8" placeholder="Mínimo 8 caracteres" pattern="(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}">
                <small class="text-muted"> Debe contener al menos una letra, un número y un caracter especial. </small>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="../index.php" class="btn botonVolverAlLogIn">
                    Volver al login
                </a>

                <button type="submit" class="btn botonRegistrarme">
                    Registrarme
                </button>
            </div>

        </form>

    </div>

</body>

</html>