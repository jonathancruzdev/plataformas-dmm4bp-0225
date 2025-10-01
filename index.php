<?php
    // Esto es un comentarios
    $titulo = "Escuela";
    $year = 2025;
    $nombre = "Juan ";
    $apellido = "Ruiz";
    $logueado = false;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataformas de Desarrollo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            <?php 
                echo($titulo);
            ?>
        </h1>

    </header>
    <main class="container">
        <h2>Bienvenido <?php echo( $nombre . $apellido  ); ?></h2>
        <div class="card">
            <img src="foto.jpg" alt="foto">
            <p>
                descripción
            </p>
        </div>
        <hr>

        <?php
            if( $logueado ==  true){
                echo("<div class='comentario'>
                        <textarea rows='2'></textarea>
                        <button>Publicar</button>
                    </div>"
                    );
            } else {
                echo("<h2>Acceso Restringido</h2>");

            }
        ?>
    </main>
    <footer>
        <p>DV | Plataformas de Desarrollo | 2025</p>
    </footer>
</body>
</html>