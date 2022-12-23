<?php
session_start();
if ($_SESSION['permiso'] == 1) {
    $permiso = "";
} else {
    $permiso = "disabled";
}
;
if ($_SESSION['session'] == 1) {
?>
    <div class="d-flex ">
        <a href="./claseabtracta/index.html" class="btn btn-primary mx-3">Calcular Areas</a>
        <a href="./resourses/registro.php" class="btn btn-primary mx-3 <?= $permiso ?>">Gestionar Usuarios</a>
        <a href="./resourses/login_out.php" class="btn btn-outline-light  mx-3">Cerrar Session</a>
    </div>

<?php
} else{
?>
    <div class="d-flex">
        <a href="./resourses/login.php" class="btn btn-outline-light mx-3">Iniciar sesion</a>
        <a href="./resourses/autoRegistro.php" class="btn btn-outline-light  mx-3">Registrarse</a>
    </div>

    
<?php
}
?>