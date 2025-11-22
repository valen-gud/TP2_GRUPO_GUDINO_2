<!DOCTYPE html> <!-- INDEX PRUEBAAAAAAAAAAAAAAAAAAAA PARA EL FINAL-->
<html lang="eS">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENVENIDO | Capri shoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos_404.css">
</head>

<body>


    <main>
        <section>
            <div class="d-flex">
                <video class="videoError" muted autoplay loop>
                    <source src="./img/video1.mp4" type="video/mp4">
                </video>
                <video class="videoError" muted autoplay loop>
                    <source src="./img/video1.mp4" type="video/mp4">
                </video>
                <video class="videoError" muted autoplay loop>
                    <source src="./img/video1.mp4" type="video/mp4">
                </video>
                <video class="videoError" muted autoplay loop>
                    <source src="./img/video1.mp4" type="video/mp4">
                </video>
            </div>
            <div class="overlay"></div>
            <h1 class="titulo-error">Bienvenido a Capri Shoes</h1>
            <div class="contenedor-contacto">

                <form class="formulario-contacto text-center m-5" action="./actions/contacto_acc.php" method="POST">

                    <label class="form-label" for="nombre">Nombre completo</label>
                    <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>

                    <label class="form-label mt-3" for="email">Email</label>
                    <input class="form-control" type="email" placeholder="ejemplo@ejemplo.com" required id="email" name="email">

                    <label class="form-label mt-3" for="pass">Contraseña</label>
                    <input class="form-control" type="password" placeholder="********" id="password" name="pass" required>

                    <label class="form-label mt-3" for="check">Queres ingresar como:</label>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                        <label class="form-check-label" for="radioDefault1">
                            Comprador
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                        <label class="form-check-label" for="radioDefault2">
                            Administrador
                        </label>
                    </div>

                    <div class="d-flex gap-3 justify-content-center mt-4">
                        <input class="btn botonVolver" type="submit" value="Enviar">
                    </div>
                </form>



            </div>
        </section>


    </main>

</body>

</html>