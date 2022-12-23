<?php
$nombre=$_POST['nombreEmail'];
$apellido=$_POST['apellidoEmail'];
$telefono=$_POST['telefonoEmail'];
$email=$_POST['emailEmail'];
$mensaje=$_POST['mensajeEmail'];

$mensaje = "Hola $nombre $apellido, Gracias por ponerte en contacto con nosotros, Recibimos tu mensaje, le daremos solucion a tu inquietud lo mas pronton posible.\r\Te pondremos en contacto con un asesor a través de tu numero telefonico: $telefono";

$mensaje = wordwrap($mensaje, 70, "\r\n");

mail('mymascota@person.com', 'Respuesta a tu mensaje', $mensaje);
header('Location: ./index.php?x=6');
?>