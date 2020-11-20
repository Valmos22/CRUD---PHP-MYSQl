<?php
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=abc.doc");  //File name extension was wrong
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);


  $mysqli = new mysqli("localhost", "root", "", "php_mysql_crud");
  if ($mysqli->connect_errno) {
      echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }

  $resultado = $mysqli->query("SELECT * FROM `task`");

  if($resultado){

    echo "<table border='1'>";
      echo "<tr>
          <td>Id</td>
          <td>Titulo</td>
          <td>Descripcion</td>
          <td>Fecha</td>
        </tr>
      ";
 

    while ($itemTemp = $resultado->fetch_assoc()) {
      echo "<tr>
              <td>".$itemTemp['id']."</td>
              <td>".$itemTemp['title']."</td>
              <td>".$itemTemp['description']."</td>
              <td>".$itemTemp['created_at']."</td>
            </tr>
          ";
    }

    echo "</table>";
  }else{
    echo "Falló sql: (" . $mysqli->errno . ") " . $mysqli->error;
  
  }



?>