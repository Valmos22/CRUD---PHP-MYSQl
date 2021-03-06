<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
    <div class="row rounded-pill" style="display: flex; justify-content: center; align-items: center;">
        <div class="col-md-4">
            <!-- MESSAGES -->

            <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset(); } ?>

            <!-- ADD TASK FORM -->
            <div class="card card-body" style="border-radius:20px; box-shadow: 4px 6px 8px grey">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Titulo</label>
                        <input type="text" style="box-shadow: 4px 6px 8px grey;" name="title" class="form-control rounded-pill" placeholder="Titulo" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Descripcion</label>
                        <textarea name="description" rows="1" style="box-shadow: 4px 6px 8px grey;" class="form-control rounded-pill" placeholder="Descripcion"></textarea>
                    </div>
                    <input type="submit" name="save_task" style="box-shadow: 4px 6px 8px grey;" class="btn btn btn-outline-dark btn-block rounded-pill" value="Guardar Tarea">
                </form>
            </div>
        </div>

        <!-- Mostrar task en tabla -->
        <div class="col-md-12 ver-tarea rounded-pill" style="margin-top: 20px">
            <table class="table table-bordered" style="border-radius:20px;">
                <thead class="thead-dark" style="border-radius: 20px">
                    <tr>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Fecha</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM task";
                    $result_tasks = mysqli_query($conn, $query);    

                    while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                    <tr>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                            </a>
                            <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
            <a type="submit" href="imprimir.php" style="box-shadow: 4px 6px 8px grey;" class="btn btn-outline-dark rounded-pill">Imprimir Tareas</a>
        </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>