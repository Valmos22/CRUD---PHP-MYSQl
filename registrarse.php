<?php include('includes/headerdos.php'); ?>

<main class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <?php if (isset($_SESSION['message2'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type2']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message2']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset(); } ?>

            <!-- Agregar estudiante -->
            <div class="card card-body" style="position: relative; left: 110%;top: 50%;">
                <form action="save_registro.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre Estudiante" autofocus>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="correo" class="form-control" placeholder="Correo" autofocus>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Contraseña</label>
                        <input type="password" name="contraseña" class="form-control" placeholder="Contraseña"
                            autofocus>
                    </div>
                    <input type="submit" name="guardar" class="btn btn-success btn-block" value="Aceptar">
                </form>
            </div>
        </div>
    </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>