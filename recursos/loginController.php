<?php
include('conexionBD.php');
session_start();
$usuario = $_POST["usuario"];
$pass = $_POST["pass"];
$sql = "SELECT * FROM users WHERE username='$usuario' AND pasword='$pass' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if ($row['username'] == $usuario && $row['pasword'] == $pass) {
    $_SESSION['session'] = 1;
    $_SESSION['rol'] = $row['id_rol_usu'];
    if ($row['id_rol_usu'] <= 2) {
        $_SESSION['permiso'] = 1;
    }else{
        $_SESSION['permiso'] = 0;
    }

    header('Location: ../index.php');
} else {
    header('Location: ./login.php?x=2');
};
