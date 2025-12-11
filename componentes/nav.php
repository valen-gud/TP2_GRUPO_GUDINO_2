<link rel="stylesheet" href="../css/estilos_nav.css">


<nav class="barraDeNavegacion navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand divLogo" href="shop.php">
      <img class="imgLogo" src="../img/capri_shoes_logo.png" alt="logo_capri_shoes">
    </a>
    <div>
      <ul class="nav justify-content-end  text-white">
        <li class="nav-item">
          <a class="nav-link " href="shop.php?view=inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../views/sobre_nosotros.php">Sobre nosotras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto.php">Contacto</a>
        </li>
        <?php if (isset($_SESSION["rol"])): ?>
          <form action="../index.php" method="POST">
            <button type="submit" class="btn botonLogout">Cerrar sesión</button>
          </form>
        <?php endif; ?>
      </ul>


    </div>
  </div>
</nav>