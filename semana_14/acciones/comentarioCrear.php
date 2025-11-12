<?php
    session_start();
    require_once('../conexion.php');
    $detalle = $_POST['detalle'];
    $id_pelicula = $_GET['id_pelicula'];
    $id_usuario = $_SESSION['id_usuario'];
    $fecha = date('Y-m-d');
    echo($detalle);
    $sql = "INSERT INTO comentarios(fecha, detalle, id_pelicula, id_usuario)
            VALUES ('$fecha', '$detalle', $id_pelicula, $id_usuario)";
    $resultado = mysqli_query($conexion, $sql);

    header("Location: ../detalle.php?id=$id_pelicula");
?>

<h2>Creando comenario</h2>