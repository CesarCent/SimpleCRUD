<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Yo Lugano - Promociones</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
<!-- CSS only -->
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
		onclick=location.href='../materiales/'; onKeyPress=location.href='../materiales/'; style='cursor:pointer';/>
	</h2>
	</div>
	<div class="col-sm-2"></div>
    <div class="col-sm-2"></div>	
    <div class="col-sm-2"></div>	
  <div class="col-sm-2"><img class="d-block mx-auto mb-1" src="../img/logo.png" alt="" width="62" height="62"></div>
  <div class="col-sm-2"><h2>Ejemplo</h2></div>
</div>

    <div class="col-md-12 order-md-1">
      <h4 class="mb-4">Nuevo Material</h4>
      <?php 
      require "../conexion.php";


	
      $sql = "SELECT * from lugares order by nombrelugar";
	    $query = $mysqli->query($sql);
	    while($resultado = $query->fetch_assoc()) {
        $lugares[] = $resultado;
      }	
	    if (!isset($lugares)){
	      $lugares[] = null;
	    }
	
?>

      <form class="needs-validation" novalidate action="grabar.php" method="post">
        
      <div class="row">
          <div class="col-md-6 mb-4">
            <label for="firstName">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre"  value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el Nombre.
            </div>
          </div>
          
        </div>

        <div class="row">
                   <div class="col-md-4 mb-4">
            <label for="state">Pais</label>
            <select class="custom-select d-block w-100" id="lugar" name="lugar" required>
             <?php 
				      $long = count($lugares);
				      for($i=0; $i< $long; $i++){
				        echo "<option";
				        echo " value=" .$lugares[$i]['idlugar'] .">";				
						    echo $lugares[$i]['nombrelugar'];
				        echo "</option>";
				      }
				      ?>
            </select>
            <div class="invalid-feedback">
              Faltó seleccionar un lugar
            </div>
          </div>
        </div>
	<!-- --------------------->
			     <div class="row">
          <div class="col-md-6 mb-4">
            <label for="firstName">Precio:</label>
            <input type="number" class="form-control" id="precio" name="precio"  step="0.1" required>
            <div class="invalid-feedback">
              Faltó ingresar el precio.
            </div>
          </div>
          
        </div>
          </div>
		</div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020 - Ejemplo</p>

  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
<script src="../js/form-validation.js"></script></body>
</body>
</html>
