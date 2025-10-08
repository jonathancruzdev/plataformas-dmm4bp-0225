<?php  //               0                          1                      2
    $peliculas = [
        "images/pelicula1.jpg", 
        "images/pelicula2.jpg", 
        "images/pelicula3.jpg", 
        "https://media.themoviedb.org/t/p/w300_and_h450_bestv2/pPfsEXzfk2URkQ1OxhUShAXdxMr.jpg"
    ];
?>

<main class="container pt-4">
    <div class="row">
        <?php
                for ($i=0; $i < count($peliculas); $i++) {
                    $imgUrl = $peliculas[$i];
                    echo("<div class='card col-md-3'>
                            <img src='$imgUrl' class='img-fluid' alt='pelicula 1'>
                        </div>");
                }
        ?>
        
    </div>
</main>