<?php
    require_once('../conexion.php');
    $detalle = $_POST['detalle'];
    $id_pelicula = $_GET['id_pelicula'];
    $id_usuario = 1;
    $fecha = "2025-10-29";
    echo($detalle);
    $sql = "INSERT INTO comentarios(fecha, detalle, id_pelicula, id_usuario)
            VALUES ('$fecha', '$detalle', $id_pelicula, $id_usuario)";
    $resultado = mysqli_query($conexion, $sql);

    header("Location: ../detalle.php?id=$id_pelicula");
?>

<h2>Creando comenario</h2>