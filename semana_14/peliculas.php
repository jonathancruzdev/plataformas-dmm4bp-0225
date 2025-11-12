<?php
  //require_once("conexion.php");

    if( isset($_GET['id_genero'])  ) {
        $id_genero = $_GET['id_genero'];
        $sql = "SELECT id_pelicula, titulo, foto, fecha 
                FROM peliculas
                WHERE id_genero = $id_genero";
    } else {
        $sql = "SELECT id_pelicula, titulo, foto, fecha 
                FROM peliculas";
    }
   


    // Arrays asociativos
    $usuario = [
        'id_usuario' => 1,
        'nombre' => 'Lucas',
        'apellido' => 'Ruiz',
        'email' => 'lucas@dv.com.ar'
    ];   

 
    $resultado = mysqli_query($conexion, $sql);
?>

<main class="container pt-4">
    <div class="row">
        <?php
                if( $resultado->num_rows == 0){
                    echo('<h2> no se encontraro Resultados </h2>');
                } 
                while( $pelicula = mysqli_fetch_assoc($resultado)  ) {
                    $id_pelicula = $pelicula['id_pelicula'];
                    $titulo = $pelicula['titulo'];
                    $imgUrl = $pelicula['foto'];
                    $fecha = $pelicula['fecha'];

                    echo("
                        <div class='col-md-3'>
                            <a href='detalle.php?id=$id_pelicula' class='btn btn-primary'>
                                <div class='card'>
                                    <img src='$imgUrl' class='img-fluid' alt='pelicula 1'>
                                    <h4> $titulo </h4>
                                    <span class='fecha'> $fecha </span>
                                </div>
                            </a>
                        </div>

                        ");
                }
        ?>
        
    </div>
</main>