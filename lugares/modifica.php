<!doctype html>
<html>
<?php 
   require "../metodos.php";
?>

  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
  <div class="row">
    <div class="col-sm-2"><h2>
		<img border="0" src="../img/atras.png" width="48" height="48" title="Volver al menú" 
							onclick=location.href='../lugares/'; 
							onKeyPress=location.href='../lugares/'; 
							style='cursor:pointer';/>
	</h2>
	</div>
    <div class="col-sm-2">
		<img border="0" src="../img/borrar.png" width="48" height="48" title="Eliminar" 
						<?php echo " onclick=location.href='" 
												. "cuidado.php?id=".$_GET['id'] . "'"; ?>;
						<?php echo " onKeyPress=location.href='" 
												. "cuidado.php?id=".$_GET['id'] . "'"; ?>												
						style='cursor:pointer';/>
	
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"><h2></h2></div>	

  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/logo.png" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>Ejemplo</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Modificar Lugares</h4>
      <form class="needs-validation" novalidate action="modi.php" method="post">
	  
<?php 
   require "../conexion.php";
    $sql = "SELECT * from lugares where idlugar = " . $_GET['id'];
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $lugares[] = $resultado;
    }  
    $sql = "SELECT * from lugares order by nombrelugar";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $lugares[] = $resultado;
    }  	
	
	echo "<input type='hidden' name='id' value=" .$_GET['id'] .">"; 
?>  
<!-- ----------------------------------------------------------------	 -->
	    
        <div class="row">
          <div class="col-md-6 mb-4">
            <label for="firstName">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value=<?php echo "'".$lugares[0]['nombrelugar']."'" ?> required>
            <div class="invalid-feedback">
              Faltó ingresar el nombre.
            </div>
          </div>
		    </div>
<!-- ----------------------------------------------------------------	 -->

        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Modificar</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020 - Ejemplo</p>

  </footer>
</div>
</body>
</html>
