<?php  //               0                          1                      2
    $peliculas = [
        "images/pelicula1.jpg", 
        "images/pelicula2.jpg", 
        "images/pelicula3.jpg", 
        "https://media.themoviedb.org/t/p/w300_and_h450_bestv2/gd4hRY3pFXRY7YVbMdVBpnKV7wC.jpg",
        "https://image.tmdb.org/t/p/w600_and_h900_bestv2/57lwxja44bDvaOGbLrUfINMe5Vh.jpg",
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