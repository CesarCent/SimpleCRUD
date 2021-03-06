<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Yo Lugano - Lugares</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../js/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
  <div class="row">
    <div class="col-sm-2"><h2>
		<img border="0" src="../img/atras.png" width="48" height="48" title="Volver al menú" 
		onclick=location.href='../'; onKeyPress=location.href='../'; style='cursor:pointer';/>
	</h2>
	</div>
    <div class="col-sm-2"><h2>
		<img border="0" src="../img/nuevo.png" width="48" height="48" title="Ingresar Lugar" 
		onclick=location.href='lugar.php'; onKeyPress=location.href='lugar.php';
		style='cursor:pointer';>
	
	</h2></div>
	<div class="col-sm-2"><h2>
		<img border="0" src="../img/imprimir.png" width="48" height="48" title="Impresión" 
		onclick=location.href='listado.php'; onKeyPress=location.href='listado.php';
		style='cursor:pointer';>
	
	</h2></div>
    <div class="col-sm-2"><h2></h2></div>	

  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/logo.png" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>Ejemplo</h2></div>
</div>
    
    <p class="lead"><h2>Lugares</h2></p>
  </div>
    <div class="col-md-12 order-md-1">
      <h4 class="mb-1">Detalles</h4>
	</div>  
<?php 
   require "../conexion.php";
$sql = "SELECT * from lugares";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $Lugares[] = $resultado;
    }
  if (!isset($Lugares)){
	  $Lugares[] = null;
  }
	  
?>    
        <div class="list-group">
		
			<?php 				
				$long = count($Lugares);
				for($i=0; $i< $long; $i++){
				?>
		<div class="list-group">
				
				<a 	<?php echo "href=modifica.php?id=".$Lugares[$i]['idlugar'];?>
						 class="list-group-item">
				<h4 class="list-group-item-heading"> <?php echo $Lugares[$i]['nombrelugar'];?> </h4>
				</a>	</div>
		<?php  } ?>
	
				
		</div>
        <a href="../">	 <hr class="mb-4">
        <button class="btn btn-success btn-lg btn-block" type="submit">Volver</button>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
     
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020 - Ejemplo</p>
 <!--   <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>-->
  </footer>
</div>
</body>
</html>