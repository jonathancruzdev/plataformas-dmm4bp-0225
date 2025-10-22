<?php
    require_once("secciones/head.php");
    require_once("secciones/nav.php");
    require_once("conexion.php");

    $id_pelicula = $_GET['id'];

     $sql = "SELECT id_pelicula, titulo, foto, fecha, detalle 
             FROM peliculas
             WHERE id_pelicula = $id_pelicula";

    $resultado = mysqli_query($conexion, $sql);

    $pelicula = mysqli_fetch_all( $resultado, MYSQLI_ASSOC )[0];

   
    $titulo = $pelicula['titulo'];
    $foto = $pelicula['foto'];
    $fecha = $pelicula['fecha'];
    $detalle = $pelicula['detalle'];


?>
<main class="container pt-4">
  <div class="row">
    <div class="col">
        <img src="<?php echo($foto); ?>" alt="Pelicual">
    </div>
    <div class="col">
        <h2><?php echo($titulo); ?></h2>
        <p><?php echo($detalle); ?></p>

        <hr>
        <h4>Comentarios</h4>
        <ul>
            <li>Comentario 1</li>
            <li>Comentario 2</li>
            <li>Comentario 3</li>
        </ul>

        <form action="">
            <textarea name="comentario" id="" class="form-control"></textarea>
            <button type="submit" class="btn btn-success">Comentar</button>
        </form>
    </div>
  </div>

</main>


<?php
  require_once("secciones/footer.php");
?>