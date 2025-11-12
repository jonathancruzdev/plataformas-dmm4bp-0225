<?php
    session_start();
    require_once('../conexion.php');
    $email = $_POST['email'];
    $password = $_POST['password'];


    
    $password = md5( $password);

    $sql = "SELECT id_usuario, nombre, email, id_rol
            FROM usuarios
            WHERE email = '$email' AND password = '$password'";
    $resultado = mysqli_query($conexion, $sql);
    $usuario = mysqli_fetch_all( $resultado, MYSQLI_ASSOC );
   
    if( !$usuario){
        echo("<h2>Usuario o Contraseña Invalido </h2>");
    } else {
        $id_usuario = $usuario[0]['id_usuario'];
        $email = $usuario[0]['email'];
        $nombre = $usuario[0]['nombre'];

        $id_rol = $usuario[0]['id_rol'];
        $email = $usuario[0]['email'];
        $_SESSION['id_usuario'] = $id_usuario;
        $_SESSION['email'] = $email;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['id_rol'] = $id_rol;


        echo("<h2>Bienvenido $email</h2>");
        header("Location: ../index.php");
    }
    
?>
