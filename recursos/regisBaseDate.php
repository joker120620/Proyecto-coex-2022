<?php
include('conexionBD.php');
$nNombre = $_POST["nNombre"];
$nApellido = $_POST["nApellido"];
$nUsuario = $_POST["nUsuario"];
$nPass = $_POST["nPass"];
$nEmail = $_POST["nEmail"];
$consultaRegistro = "INSERT INTO users(nombre,lastname,username,pasword,email) VALUES('$nNombre','$nApellido','$nUsuario','$nPass','$nEmail');";
$result = mysqli_query($conn, $consultaRegistro);
if ($result) {
    header('Location: ./registro.php?x=1');
}else{
    header('Location: ./registro.php?x=2');
}
;
?>