<?php
    require_once('../conexion.php');
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $id_rol = 2;
    
    $password = md5( $password);

    $sql = "INSERT INTO usuarios(nombre, email, password, id_rol)
            VALUES ('$nombre', '$email', '$password', $id_rol)";
    $resultado = mysqli_query($conexion, $sql);

    header("Location: ../login.php");
?>
