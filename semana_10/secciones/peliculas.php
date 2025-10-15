<?php  //         
    // Arrays asociativos
    $usuario = [
        'id_usuario' => 1,
        'nombre' => 'Lucas',
        'apellido' => 'Ruiz',
        'email' => 'lucas@dv.com.ar'
    ];   
/*     $peliculas = [
       [ "id_pelicula" => 1, "titulo" => "Mentes criminales", "foto"  => "images/pelicula1.jpg", "fecha" => 2005],
       [ "id_pelicula" => 2, "titulo" => "The Amazing Spider-Man ", "foto"  => "images/pelicula2.jpg", "fecha" => 2014],
       [ "id_pelicula" => 3, "titulo" => "Top Gun", "foto"  => "images/pelicula3.jpg", "fecha" => 1986]
    ]; */

    $sql = "SELECT id_pelicula, titulo, foto, fecha 
            FROM peliculas";
    $resultado = mysqli_query($conexion, $sql);
   /*  $peliculas = mysqli_fetch_array ($resultado );
    print_r($peliculas); */
;
?>

<main class="container pt-4">
    <div class="row">
        <?php
                //for ($i=0; $i < count($pelicula); $i++) {
                while( $pelicula = mysqli_fetch_assoc($resultado)  ) {
                    $titulo = $pelicula['titulo'];
                    $imgUrl = $pelicula['foto'];
                    $fecha = $pelicula['fecha'];

                    echo("<div class='card col-md-3'>
                            <img src='$imgUrl' class='img-fluid' alt='pelicula 1'>
                            <h4> $titulo </h4>
                            <span class='fecha'> $fecha </span>
                        </div>");
                }
        ?>
        
    </div>
</main>