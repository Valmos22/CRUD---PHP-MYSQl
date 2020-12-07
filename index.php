<?php include("db.php");

session_start();


?>

<?php include('includes/headerdos.php'); ?>

<main class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body" style="position: relative; left: 110%;top: 50%; border-radius: 20px; box-shadow: 4px 6px 8px grey;">
                <div class="sesion">

                    <form action="validar.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type='text' style="box-shadow: 4px 6px 8px grey;" class="form-control rounded-pill" placeholder="Email" name="correo">
                            <input type='hidden' class="form-control" name="mensaje" value="Has iniciado sesión en HugoLearn">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" style="box-shadow: 4px 6px 8px grey;" class="form-control rounded-pill" placeholder="Contraseña" name="contraseña">
                        </div>
                        <input type="submit" name="ini_sesion" style="box-shadow: 4px 6px 8px grey;" class="btn btn btn-outline-dark btn-block rounded-pill" value="Aceptar">
                        <!-- <button type="submit" name="ini_sesion" class="btn btn-primary">Aceptar</button> -->
                        <a class="" style="display: flex; justify-content: center; align-items: center; color:black; margin-top: 20px;" href="registrarse.php">REGISTRARSE</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>