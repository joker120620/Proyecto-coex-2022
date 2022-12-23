<?php
include('conexionBD.php');
if (isset($_GET['id'])) {
    session_start();
    $id = $_GET['id'];
    $rol = $_SESSION['rol'];
    $_SESSION['id'] = $id;
    $consult1 = "SELECT * FROM users, roles WHERE id_rol_usu=id_rol AND id='$id'";
    $result1 = mysqli_query($conn, $consult1);
    $row = mysqli_fetch_array($result1);
}
?>
<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">Home</a>
            </div>
        </nav>
        <div class="container d-flex justify-content-center my-4">
            <h2>ACTUALIZAR USUARIOS</h2>
        </div>
    </header>
    <main>
        <section>
            <div class="container border ">
                <form class="row p-3 align-items-center my-4 " method="post" action="actualizarController.php">
                    <div class="mb-3 col-2 g-4">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" placeholder="<?= $row['nombre'] ?>" name="aNombre" required>
                    </div>
                    <div class="mb-3 col-2 g-4">
                        <label class="form-label">Apellido</label>
                        <input type="text" class="form-control" placeholder="<?= $row['lastname'] ?>" name="aApellido" required>
                    </div>
                    <div class="mb-3 col-2 g-4">
                        <label class="form-label">Usuario</label>
                        <input type="text" class="form-control" placeholder="<?= $row['username'] ?>" name="aUsuario" required>
                    </div>
                    <div class="mb-3 col-2 g-4">
                        <label class="form-label">Contraseña</label>
                        <input type="password" class="form-control" placeholder="<?= $row['pasword'] ?>" name="aPass" required>
                    </div>
                    <div class="mb-3 col-2 g-4">
                        <label class="form-label">Email</label>
                        <input class="form-control" type="email" placeholder="<?= $row['email'] ?>" name="aEmail" required>
                    </div>
                    <div class="mb-3 col-2 g-4">
                        <label class="form-label">Rol</label>
                        <select class="form-select " aria-label="Default select example" name="aRol" required>
                            <option selected>Selecione un rol</option>
                            <?php
                            $consult2 = "SELECT * FROM roles WHERE est=1 AND id_rol>$rol";
                            $result2 = mysqli_query($conn, $consult2);
                            while ($row = mysqli_fetch_array($result2)) {
                            ?>
                                <option value="<?php echo $row['id_rol'] ?>"><?php echo $row['nom_rol'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="my-3 col-12 d-flex justify-content-center">
                        <input type="submit" class="btn btn-success" value="GUARDAR">
                    </div>
                </form>

            </div>

        </section>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>