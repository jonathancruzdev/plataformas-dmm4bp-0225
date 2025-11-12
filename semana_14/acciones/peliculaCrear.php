<?php
    session_start();
    if( !isset($_SESSION['id_usuario'])){
        header('Location: ../index.php');
    }

    require_once('../conexion.php');

    $titulo = $_POST['titulo'];

    // Obtenemos el nombre del archivo
    $fotoNombre =  $_FILES['foto']['name'];
    $rutaTemporal = $_FILES['foto']['tmp_name'];
    $rutaFoto = 'images/'. $fotoNombre;
    
    // Movemos el archivo a la carpeta images
    move_uploaded_file($rutaTemporal, '../'.$rutaFoto );

    $fecha = $_POST['fecha'];
    $detalle = $_POST['detalle'];
    $id_genero = $_POST['id_genero'];

    $sql = "INSERT INTO peliculas(titulo, foto, fecha, detalle, id_genero)
            VALUES        ('$titulo', '$rutaFoto', '$fecha', '$detalle', $id_genero)";
    $resultado = mysqli_query($conexion, $sql);

    header("Location: ../index.php");
?>
