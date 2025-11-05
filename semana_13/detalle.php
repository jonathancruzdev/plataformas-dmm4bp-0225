<?php
    require_once("conexion.php");
    require_once("secciones/head.php");
    require_once("secciones/nav.php");

    $id_pelicula = $_GET['id'];

    $sql = "SELECT id_pelicula, titulo, foto, fecha, detalle 
             FROM peliculas 
             WHERE id_pelicula = $id_pelicula";
    $resultado = mysqli_query($conexion, $sql);
    $pelicula = mysqli_fetch_all( $resultado, MYSQLI_ASSOC )[0];

    $sqlComentarios = "SELECT id_comentario, fecha, detalle, C.id_usuario, U.nombre
                       FROM comentarios C
                       INNER JOIN usuarios U ON U.id_usuario = C.id_usuario
                       WHERE id_pelicula = $id_pelicula";
    $resultadoComentarios = mysqli_query($conexion, $sqlComentarios);
    $comentarios = mysqli_fetch_all( $resultadoComentarios, MYSQLI_ASSOC );

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
            <?php
              for ($i=0; $i < count($comentarios); $i++) { 
                $id_comentario = $comentarios[$i]['id_comentario'];
                $fecha = $comentarios[$i]['fecha'];
                $detalle = $comentarios[$i]['detalle'];
                $usuario = $comentarios[$i]['nombre'];
            
                echo("<li><strong>$usuario:</strong> $fecha | $detalle</li>");

              }
            ?>
           
        </ul>

        <form action="acciones/comentarioCrear.php?id_pelicula=<?php echo($id_pelicula); ?>" method="POST">
            <textarea name="detalle" class="form-control"></textarea>
            <button type="submit" class="btn btn-success">Comentar</button>
        </form>
    </div>
  </div>

</main>


<?php
  require_once("secciones/footer.php");
?>