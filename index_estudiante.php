<?php
// session_start();
// if(!isset($_SESSION['rol'])){
//     header('location: index.php');
// }else{
//     if($_SESSION['rol'] != 1){
//         header('location: index.php');
//     }
// }
?>

<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>
</head>
<body>
<main class="container p-4">
    <div class="row">
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
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Titulo" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Descripcion"></textarea>
                    </div>
                    <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar Tarea">
                </form>
            </div>
        </div>
        <!-- Mostrar task en tabla -->
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
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
            <a type="submit" href="imprimir.php" class="btn btn-success btn-block">Imprimir</a>
        </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>
</body>
</html>