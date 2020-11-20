<?php

include('db.php');

if (isset($_POST['guardar'])) {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $contraseña = $_POST['contraseña'];

  $query = "INSERT INTO estudiantes(nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$contraseña')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  // $_SESSION['message'] = 'Task Saved Successfully';
  // $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>