<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>registro</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">Home</a>
            </div>
        </nav>
    </header>
    <main>

        <section>
            <div class="container d-flex align-items-center my-5 border flex-column p-4">
                <h2 class="mb-3">Registrarse</h2>
                <form class="text-center w-25 p-4 bg-dark text-light rounded-5" method="post" action="autoRegisController.php">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nNombre" name="nNombre" required>
                    </div>
                    <div class="0mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="nApellido" name="nApellido" required>
                    </div>
                    <div class="mb-3">
                        <label for="nUsuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="nUsuario" name="nUsuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="nPass" class="form-label">Contraseña</label>
                        <input type="password" class="form-control " id="nPass" name="nPass" required>
                    </div>
                    <div class="mb-3">
                        <label for="nEmail" class="form-label">Email</label>
                        <input type="email" class="form-control " id="nEmail" name="nEmail" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>

            </div>
        </section>
        <?php include("modalOpen.php"); ?>
        

    </main>
    <footer></footer>
  
</body>

</html>