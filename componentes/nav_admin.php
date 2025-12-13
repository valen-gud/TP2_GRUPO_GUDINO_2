<link rel="stylesheet" href="../css/estilos_nav_admin.css">


<nav class="barraDeNavegacion navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand divLogo" href="admin.php">
      <img class="imgLogo" src="/proyecto/img/admin_logo.png" alt="logo_admin">
    </a>
    <div>
      <ul class="nav justify-content-end  text-white">
        <?php if (isset($_SESSION["rol"])): ?>
          <form action="/proyecto/actions/logout.php" method="POST">
            <button type="submit" class="btn botonLogout">Cerrar sesión</button>
          </form>
        <?php endif; ?>
      </ul>


    </div>
  </div>
</nav>