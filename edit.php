<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM task WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $title = $row['title'];
    $description = $row['description'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $title= $_POST['title'];
  $description = $_POST['description'];

  $query = "UPDATE task set title = '$title', description = '$description' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tarea Actualizada';
  $_SESSION['message_type'] = 'warning';
  header('Location: index_2.php');
}

?>
<?php include('includes/header.php'); ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body" style="border-radius:20px;">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Titulo</label>
          <input name="title" type="text" class="form-control rounded-pill" value="<?php echo $title; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Descripcion</label>
        <textarea name="description" rows="2" class="form-control rounded-pill" cols="30" rows="10"><?php echo $description;?></textarea>
        </div>
        <button class="btn btn btn-outline-dark btn-block rounded-pill" name="update">
          Update
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>

