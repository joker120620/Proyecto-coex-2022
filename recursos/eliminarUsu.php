<?php
include('conexionBD.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $consultDelete = "UPDATE users SET estado=0 WHERE id='$id'";
    $resultDelete = mysqli_query($conn, $consultDelete);
    if ($resultDelete) {
        header('Location: ./registro.php?x=4');
    }else{
        header('Location: ./registro.php?x=2');
    }
} 
?>