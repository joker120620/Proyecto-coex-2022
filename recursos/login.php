<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">Home</a>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <div class="container bg-light d-flex align-items-center flex-column mb-3 my-4  border w-25 p-2 rounded-4">
                <div class="mb-4 mt-5">
                    <h2>LOGIN</h2>
                </div>
                <div class="border border-dark w-100 my-3"></div>
                <form class="d-flex flex-column align-items-center  mb-3" action="loginController.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="usuario">
                        <label for="floatingInput">Usuario</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass">
                        <label for="floatingPassword">Contraseña</label>
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-success" type="submit" value="Entrar">
                    </div>
                </form>

            </div>
        </section>
        <?php include("modalOpen.php"); ?>
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>