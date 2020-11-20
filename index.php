<?php include("db.php"); ?>



<?php include('includes/headerdos.php'); ?>

<main class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body" style="position: relative; left: 110%;top: 50%;">
                <div class="sesion">

                    <form action="validar.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type='text' class="form-control" name="email">
                            <input type='hidden' class="form-control" name="mensaje" value="Has iniciado sesión">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" class="form-control" name="contraseña">
                        </div>
                        <input type="submit" name="ini_sesion" class="btn btn-success btn-block" value="Aceptar">
                        <!-- <button type="submit" name="ini_sesion" class="btn btn-primary">Aceptar</button> -->
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>