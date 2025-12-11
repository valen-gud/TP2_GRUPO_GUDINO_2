<!DOCTYPE html> <!-- INDEX actualzado el 11/12 PARA EL FINAL-->
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENVENIDO | Capri shoes</title>
    <link rel="shortcut icon" href="favicon.ico.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos_indexLogin.css">
</head>

<body>


    <main>
        <section>
            <div class="d-flex">
                <video class="videoLogin" muted autoplay loop>
                    <source src="./img/video1.mp4" type="video/mp4">
                </video>
                <video class="videoLogin" muted autoplay loop>
                    <source src="./img/video1.mp4" type="video/mp4">
                </video>
                <video class="videoLogin" muted autoplay loop>
                    <source src="./img/video1.mp4" type="video/mp4">
                </video>
                <video class="videoLogin" muted autoplay loop>
                    <source src="./img/video1.mp4" type="video/mp4">
                </video>
            </div>
            <div class="overlay"></div>
            <h1 class="tituloLogin">Bienvenido a Capri Shoes</h1>
            <div class="contenedorLogin">

                <form class="formularioLogin text-center m-5" action="./actions/login.php" method="POST">

                    <label class="form-label mt-3" for="email">Email</label>
                    <input class="form-control" type="email" placeholder="ejemplo@ejemplo.com" required id="email" name="email">

                    <label class="form-label mt-3" for="passwor">Contraseña</label>
                    <input
                        class="form-control" type="password" id="password" name="password" required minlength="8" placeholder="Mínimo 8 caracteres" pattern="(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}">
                    <small class="text-muted">
                        Debe contener al menos una letra, un número y un caracter especial.
                    </small>

                    <label class="form-label mt-3">¿Querés ingresar como?</label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rol" id="rol_usuario" value="usuario" required>
                        <label class="form-check-label" for="rol_usuario">Comprador</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rol" id="rol_admin" value="admin">
                        <label class="form-check-label" for="rol_admin">Administrador</label>
                    </div>

                    <div class="d-flex gap-3 justify-content-center mt-4">
                        <input class="btn botonCapri" type="submit" value="Ingresar">
                    </div>
                </form>



            </div>
        </section>


    </main>

</body>

</html>