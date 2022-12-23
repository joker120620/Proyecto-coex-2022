<section>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary invisible" data-bs-toggle="modal" data-bs-target="#exampleModal" id="chekar">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Mensaje</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="msjModal"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="./modal.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- llamo a la funcion que activa el modal y envio el mensaje -->
<?php

if ($_GET['x'] == 1) {
?>
    <script>
        let msj = 'REGISTRADO CON EXITO';
    </script>
    <script>
        verModal(msj);
    </script>
<?php
} else if ($_GET['x'] == 2) {
?>
    <script>
        let msj = 'ERROR';
    </script>
    <script>
        verModal(msj);
    </script>
<?php
} else if ($_GET['x'] == 3) {
?>
    <script>
        let msj = 'ACTUALIZADO CON EXITO';
    </script>
    <script>
        verModal(msj);
    </script>
<?php
} else if ($_GET['x'] == 4) {
?>
    <script>
        let msj = 'USUARIO ELIMINADO';
    </script>
    <script>
        verModal(msj);
    </script>
<?php
} else if ($_GET['x'] == 5) {
?>
    <script>
        let msj = 'BIENVENIDO';
    </script>
    <script>
        verModal(msj);
    </script>
<?php
}else if ($_GET['x'] == 6) {
    ?>
        <script>
            let msj = 'MENSAJE ENVIADO';
        </script>
        <script>
            verModal(msj);
        </script>
    <?php
    }

?>