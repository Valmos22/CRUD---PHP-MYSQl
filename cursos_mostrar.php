<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<!-- Mostrar Mis Cursos Registrados -->
<main class="container p-4">

    <div class="col" style="margin-top:20px;">
        <div class="col-md-12">
            <div class="card" style="width: 100%; border-radius:20px;">

                <div class="card-body">
                    <form action="save_curso.php" method="POST">
                        <!-- nombre -->
                        <div class="form-group">
                            <?php
                                $query = "SELECT cursos.nombre FROM usuarios INNER JOIN cursos ON usuarios.id = cursos.usuario";
                                $result_student = mysqli_query($conn, $query);    
                                while($row = mysqli_fetch_assoc($result_student)) { ?>
                            <ol style="text-align: center;">
                                <a class="card-title" style="color: black;"><?php echo $row['nombre']; ?></a>
                                <br>
                                <!-- <input type="submit" name="delete_curso" class="btn btn-outline-dark rounded-pill"
                                    value="Eliminar"> -->

                                <!-- <a href="delete_curso.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a> -->
                                <br>
                            </ol>
                            <?php } ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>

<?php include('includes/footer.php'); ?>