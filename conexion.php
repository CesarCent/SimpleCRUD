<?php
    
  // Variables de la conexion a la DB
  //  $mysqli = new mysqli("localhost","administrador","yolugano1957","yolugano");
    $mysqli = new mysqli("localhost","root","","ejemplo"); //localhost
  // Comprobamos la conexion
    if($mysqli->connect_errno) {
        die("Fallo la conexion");
    } else {
  //echo "Conexion exitosa";
		mysqli_set_charset($mysqli,"utf8");
    }
    
    ?>
