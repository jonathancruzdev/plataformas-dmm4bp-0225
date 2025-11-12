<?php
   $sql = "SELECT id_genero, detalle 
           FROM generos";
  $resultado = mysqli_query($conexion, $sql);
  $generos = mysqli_fetch_all( $resultado, MYSQLI_ASSOC );

  if(  isset($_SESSION['id_usuario']) ){
    $logueado = true;
    $nombre = $_SESSION['nombre'];
    $id_rol= $_SESSION['id_rol'];

  } else {
    $logueado = false;
    $id_rol = 2;
  }
?>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Peliculas</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <?php
                if( $id_rol == 1){
                  echo("<li class='nav-item'>
                      <a class='nav-link' href='publicacion.php'>Publicar</a>
                    </li>");
                }
              ?>

              <li class="nav-item">
                <a class="nav-link" href="empresa.php">Empresa</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categorías</a>
                <div class="dropdown-menu">
                  <?php
                     for ($i=0; $i < count($generos); $i++) { 
                      $id_genero = $generos[$i]['id_genero'];
                      $detalle = $generos[$i]['detalle'];
                      echo("<a class='dropdown-item' href='index.php?id_genero=$id_genero'>$detalle</a>");

                    }
                  ?>
                 <!--  <a class="dropdown-item" href="#">Accion</a> -->
                </div>
              </li>
            </ul>
            <div class="d-flex">
              <?php
                if( $logueado == true){

                  echo("<p> Hola $nombre </p>");
                  echo("<a class='btn btn-secondary my-2 my-sm-0' href='logout.php'>Logout</a>");
                } else {
                  echo("
                    <a class='btn btn-info my-2 my-sm-0' href='registro.php'>Registro</a>
                    <a class='btn btn-secondary my-2 my-sm-0' href='login.php'>Login</a>
                  ");
                }
              ?>
             
              

            </div>
          </div>
        </div>
</nav>