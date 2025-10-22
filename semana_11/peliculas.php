<?php      
    // Arrays asociativos
    $usuario = [
        'id_usuario' => 1,
        'nombre' => 'Lucas',
        'apellido' => 'Ruiz',
        'email' => 'lucas@dv.com.ar'
    ];   

    $sql = "SELECT id_pelicula, titulo, foto, fecha 
            FROM peliculas";
    $resultado = mysqli_query($conexion, $sql);
?>

<main class="container pt-4">
    <div class="row">
        <?php
                //for ($i=0; $i < count($pelicula); $i++) {
                while( $pelicula = mysqli_fetch_assoc($resultado)  ) {
                    $id_pelicula = $pelicula['id_pelicula'];
                    $titulo = $pelicula['titulo'];
                    $imgUrl = $pelicula['foto'];
                    $fecha = $pelicula['fecha'];

                    echo("<div class='card col-md-3'>
                            <img src='$imgUrl' class='img-fluid' alt='pelicula 1'>
                            <h4> $titulo </h4>
                            <span class='fecha'> $fecha </span>
                            <a href='detalle.php?id=$id_pelicula' class='btn btn-primary'> Detalle </a>
                        </div>");
                }
        ?>
        
    </div>
</main>