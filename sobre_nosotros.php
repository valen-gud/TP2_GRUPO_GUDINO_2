<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capri Shoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos_sobreNosotros.css">
    
</head>

<body>
    <header>
        <?php require_once "nav.php" ?>
    </header>

    <main>
        <H1 class="text-center mt-4 mb-4">SOBRE NOSOTRAS</H1>
        <section class="nosotrasTexto container">
            <div class="parrafoNosotras">
                En <strong>Capri Shoes</strong> creemos que un buen par de zapatos puede transformar no solo un outfit, sino también la manera en que te movés por el mundo. Somos una marca creada por <strong>Valentina</strong>, con la idea de combinar estilo, comodidad y durabilidad en cada diseño.
            </div>
            <div class="parrafoNosotras">
                Nuestro propósito es sencillo: ofrecer calzado moderno, versátil y pensado para acompañarte todos los días, ya sea en la rutina, el trabajo o una salida especial. Trabajamos con materiales de calidad y diseños cuidadosamente seleccionados para asegurarnos de que cada par no solo se vea bien, sino que también se sienta increíble al caminar.
            </div>
            <div class="parrafoNosotras">
                En Capri Shoes valoramos el detalle, la identidad y la experiencia de cada cliente. Por eso buscamos que cada compra sea única y que encuentres en nosotros un espacio donde la moda y la comodidad se encuentren.
            </div>
            <div class="parrafoNosotras">
                <strong>Capri Shoes:</strong> caminá con estilo, caminá con personalidad.
            </div>
        </section>

        <section class="d-flex container-fluid">
            <img class="imgNosotras" src="./img/nosotras1.jpg" class="img-thumbnail" alt="...">
            <img class="imgNosotras" src="./img/nosotras2.jpg" class="img-thumbnail" alt="...">
            <img class="imgNosotras" src="./img/nosotras3.jpg" class="img-thumbnail" alt="...">
        </section>
       <!-- <section class="carrusel">
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/nosotras1.jpg" class="d-block  w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/nosotras2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/nosotras3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>-->

        <footer>
            <?php require_once "footer.php" ?>
        </footer>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>