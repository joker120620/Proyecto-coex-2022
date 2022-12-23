<?php
include('conexionBD.php');
$myRol = $_SESSION['rol'];
$query = "SELECT * FROM users, roles WHERE id_rol_usu=id_rol AND estado=1 AND id_rol_usu>'$myRol';";
$result = mysqli_query($conn, $query);
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">ROL</th>
      <th scope="col">USERNAME</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">EMAIL</th>
    </tr>
  </thead>
  <tbody>
    <?php
    function mostrarDatos($fila1)
    {
    ?>
      <tr>
        <th scope="row"> <?php echo $fila1['id'] ?></th>
        <th scope="row"><?php echo $fila1['nombre'] ?></th>
        <th scope="row"><?php echo $fila1['lastname'] ?></th>
        <th scope="row"><?php echo $fila1['nom_rol'] ?></th>
        <th scope="row"><?php echo $fila1['username'] ?></th>
        <th scope="row"><?php echo $fila1['pasword'] ?></th>
        <th scope="row"><?php echo $fila1['email'] ?></th>
        <th scope="row"><a href="<?php echo "actualizarUsu.php?id=".$fila1['id'] ?>" class="btn btn-success">ACTUALIZAR</button></th>
        <th scope="row"><a href="<?php echo "eliminarUsu.php?id=".$fila1['id'] ?>" class="btn btn-danger">ELIMINAR</button></th>
      </tr>
    <?php
    }
    while ($fila1 = mysqli_fetch_array($result)) {
      mostrarDatos($fila1);
    };
    ?>
  </tbody>
</table>