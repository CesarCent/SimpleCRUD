<?php
	require "../conexion.php";
	require "../metodos.php";

$sql = "delete from materiales where idmat=" . $_GET['id'] ;		
?>

  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../img/logo.png" alt="" width="72" height="72">
    <h2>Ejemplo</h2>
    <p class="lead">Eliminar Materiales.</p>
  </div>
 <?php 
  if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../materiales/'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 class='mb-4'>Datos eliminados correctamente</h4> </a>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

?>

<a href="../materiales/">	 <hr class="mb-4">
        <button class="btn btn-success btn-lg btn-block" type="submit">Volver</button>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - Ejemplo</p>

  </footer>
</div>

</html>



