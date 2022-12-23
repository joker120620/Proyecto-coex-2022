<?php
require("./circulo.php");
if (isset($_GET['radio'])) {
    $radio = $_GET['radio'];
    $circulo = new areaCirculo($radio);
    $result = $circulo->obtenerDatos();
} else {
    $result = 0;
};
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>circulo</title>
</head>

<body class="bg-secondary">
    <header>
        <nav class="navbar navbar-expand-lg bg-dark text-white">
            <div class="container-fluid d-flex mx-5">
                <a class="navbar-brand text-white" href="./index.html"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
</svg></a>
            </div>
        </nav>
    </header>
    <main>

        <section class="container d-flex flex-column justify-content-center border border-dark rounded p-4 w-25 text-center mt-4 bg-light">
            <h2>CIRCULO</h2>

            <form class="d-flex flex-column justify-content-center" action="./viewCirculo.php" method="get">
                <label class="form-label mb-3" for="lado">Radio</label>
                <input class="form-control mb-3" type=number name="radio">
                <input class="btn btn-dark " type=submit>
                <label class="mt-2 form-label bg-success text-light rounded-pill" for="lado"> <?php echo $result ?> </label>
            </form>
        </section>
    </main>

</body>

</html>