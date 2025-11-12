<?php
  require_once("conexion.php");
  require_once("secciones/head.php");
  require_once("secciones/nav.php");

?>
<main class="container">
    <div class="row mt-5">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h2>Registro de usuario</h2>
            <form action="acciones/usuarioCrear.php" method="POST" class="card p-3">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control mb-2" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control mb-2" required>

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control mb-2">

                <button class="btn btn-success" type="submit">Registrar</button>
            </form>
            <div class="p-4">
                <a href="login.php" class="text-center">¿Ya tenes una cuenta? Logueate</a>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</main>


<?php
  require_once("secciones/footer.php");
?>