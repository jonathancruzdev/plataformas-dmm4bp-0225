<?php
    require_once('../conexion.php');
    $titulo = $_POST['titulo'];
    $foto = "";
    $fecha = $_POST['fecha'];
    $detalle = $_POST['detalle'];
    $id_genero = $_POST['id_genero'];

    $sql = "INSERT INTO peliculas(titulo, foto, fecha, detalle, id_genero)
            VALUES        ('$titulo', '$foto', '$fecha', '$detalle', $id_genero)";
    $resultado = mysqli_query($conexion, $sql);

    header("Location: ../index.php");
?>
