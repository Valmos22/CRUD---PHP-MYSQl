<?php
include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM cursos WHERE id = $id"; //DELETE FROM `cursos` WHERE `cursos`.`id` = 15
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  header('Location: cursos_mostrar.php');
}
?>