<?php
   $sql = "SELECT id_genero, detalle 
           FROM generos";
  $resultado = mysqli_query($conexion, $sql);
  $generos = mysqli_fetch_all( $resultado, MYSQLI_ASSOC );
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
              <li class="nav-item">
                <a class="nav-link" href="#">Registro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="publicacion.php">Publicar</a>
              </li>
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
            <form class="d-flex">
              <input class="form-control me-sm-2" type="search" placeholder="Search">
              <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </div>
</nav>