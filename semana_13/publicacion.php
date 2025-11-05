<?php
  require_once("secciones/head.php");
  require_once("secciones/nav.php");
?>
<main class="container pt-4">
    <form action="acciones/peliculaCrear.php" method="POST">
        <label for="titulo">Título</label>
        <input type="text" name="titulo" class="form-control" id="titulos">

        <label for="foto">Foto</label>
        <input type="file" name="foto" class="form-control" id="foto">

        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" class="form-control" id="fecha">
        <label for="genero">Genero</label>
        <select name="id_genero" id="" class="form-control">
          <option value="1"> Acción </option>
          <option value="2"> Comedia </option>

        </select>
        <label for="detalle">Detalles</label>
        <textarea name="detalle" id="detalle" class="form-control" rows="5"></textarea>

        <button class="btn btn-success" type="submit">Publicar</button>
    </form>

</main>
