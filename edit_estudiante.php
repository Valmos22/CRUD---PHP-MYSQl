<?php
include("db.php");
$nombre = '';
$correo= '';
$contraseña= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM estudiantes WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $correo = $row['correo'];
    $contraseña = $row['contraseña'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre= $_POST['nombre'];
  $correo = $_POST['correo'];
  $contraseña = $_POST['contraseña'];

  $query = "UPDATE estudiantes set nombre = '$nombre', correo = '$correo', contraseña = '$contraseña' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: estudiante.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_estudiante.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="correo" type="text" class="form-control" value="<?php echo $correo; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="contraseña" type="text" class="form-control" value="<?php echo $contraseña; ?>" placeholder="Update Title">
        </div>
        <button class="btn-success" name="update">
          Actualizar
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
