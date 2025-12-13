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
            <h1 class="tituloLogin mt-5">Bienvenido a Capri Shoes</h1>
            <div class="contenedorLogin mt-5">

                <form class="formularioLogin text-center m-5" action="./actions/login.php" method="POST">

                    <label class="form-label mt-3" for="email">Email</label>
                    <input class="form-control" type="email" placeholder="ejemplo@ejemplo.com" required id="email" name="email">

                    <label class="form-label mt-3" for="password">Contraseña</label>
                    <input
                        class="form-control" type="password" id="password" name="password" required minlength="8" placeholder="********" pattern="(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}">
                   

                    <div class="d-flex gap-3 justify-content-center mt-4">
                        <input class="btn botonCapri" type="submit" value="Ingresar">
                    </div>
                    <a class="btn botonRegistrarme" href="./views/registro.php">Registrarme</a>
                </form>
                
                

            </div>
        </section>


    </main>

</body>

</html>