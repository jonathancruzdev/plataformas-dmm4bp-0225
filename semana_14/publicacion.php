<?php
require_once('conexion.php');
  require_once("secciones/head.php");
  require_once("secciones/nav.php");
?>
<main class="container pt-4">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <form action="acciones/peliculaCrear.php" method="POST" enctype="multipart/form-data">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" class="form-control" id="titulos" required>

            <label for="foto">Foto</label>
            <input type="file" name="foto" class="form-control" id="foto">

            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control" id="fecha" required>
            <label for="genero">Genero</label>
            <select name="id_genero" id="" class="form-control">
              <option value="1"> Acción </option>
              <option value="2"> Comedia </option>
              <?php
                for ($i=0; $i < count($generos); $i++) { 
                    $id_genero = $generos[$i]['id_genero'];
                    $detalle = $generos[$i]['detalle'];
                    echo("<option  value='$id_genero'>$detalle</option>");
                  }
              ?>
            </select>
            <label for="detalle">Detalles</label>
            <textarea name="detalle" id="detalle" class="form-control" rows="5" required></textarea>

            <button class="btn btn-success" type="submit">Publicar</button>
        </form>
      </div>
    </div>


</main>
