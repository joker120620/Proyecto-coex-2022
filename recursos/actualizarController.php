<?php
include('conexionBD.php');
session_start();
$id = $_SESSION['id'];
$aNombre = $_POST["aNombre"];
$aApellido = $_POST["aApellido"];
$aUsuario = $_POST["aUsuario"];
$aPass = $_POST["aPass"];
$aEmail = $_POST["aEmail"];
$aRol = $_POST["aRol"];
$consultaActualizar = "UPDATE users SET nombre='$aNombre',lastname='$aApellido',username='$aUsuario',pasword='$aPass',email='$aEmail',id_rol_usu='$aRol' WHERE id='$id';";
$result = mysqli_query($conn, $consultaActualizar);
if ($result) {
    header('Location: ./registro.php?x=3');
}else{
    header('Location: ./registro.php?x=2');
}
;
/////////////////////////////////////////////////////////
?>