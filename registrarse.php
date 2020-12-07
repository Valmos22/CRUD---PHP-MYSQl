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
            <div class="card card-body" style="position: relative; left: 110%;top: 50%; border-radius: 20px; box-shadow: 4px 6px 8px grey;">
                <form action="save_registro.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" style="box-shadow: 4px 6px 8px grey;" name="nombre" class="form-control rounded-pill" placeholder="Nombre" autofocus>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                        <input type="text" style="box-shadow: 4px 6px 8px grey;" name="Email" class="form-control rounded-pill" placeholder="Correo" autofocus>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Contraseña</label>
                        <input type="password" style="box-shadow: 4px 6px 8px grey;" name="contraseña" class="form-control rounded-pill" placeholder="Contraseña"
                            autofocus>
                    </div>
                    <input type="submit" name="guardar" style="box-shadow: 4px 6px 8px grey;" class="btn btn btn-outline-dark btn-block rounded-pill" value="Aceptar">
                    <a class="" style="display: flex; justify-content: center; align-items: center; color:black; margin-top: 20px;" href="index.php">INICIA SESION</a>
                </form>
            </div>
        </div>
    </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>