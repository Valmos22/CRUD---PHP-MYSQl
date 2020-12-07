<?php

include('db.php');

if (isset($_POST['save_curso'])) {
  $nombre = $_POST['nombre'];
  $usuario = $_POST['usuario'];
  $query = "INSERT INTO cursos(nombre, usuario) VALUES ('$nombre', '$usuario')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message_is'] = 'Tarea Creada';
  $_SESSION['message_type_is'] = 'success';
  header('Location: cursos_obtener.php');

}

?>