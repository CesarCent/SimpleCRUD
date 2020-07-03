<html>
<head>
<meta http-equiv="Content-Language" content="es">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Listado de Lugares</title>

</head>

<body>
<?php 
include "../conexion.php";
    $sql = "SELECT * from lugares";
	$query = $mysqli->query($sql);
	while($lugares = $query->fetch_assoc()) {
        $subcat[] = $lugares;
    }
	if (!isset($lugares)){
	  $lugares[] = null;
	}	
?>
<p align="center"> <font face="Verdana" size="5" color="#666666"><u>Listado Lugares</u></font></i></p>

<div align="center">
  <center>
 <table border="1" cellpadding="0" cellspacing="0"  bordercolor="#CCCCCC" style="border-collapse: collapse" width="90%">
  
  <tr>
      <td width="10%" height="35"><p align="left"><font face="Verdana" size="4" >N°</font></i></td>
      <td width="50%" height="35"><p align="left"><font face="Verdana" size="4" >Nombre</font></i></td>
	  
	

	  </tr>


	<?php $long = count($subcat);
				for($i=0; $i< $long; $i++){		 
				?>

  <tr>
    <td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $i+1;?></font></i></td>	
    <td width="50%" height="35">  <p align="left"><font face="Verdana" size="4" ><?php echo $subcat[$i]['nombrelugar'];?></font></i></td>

	
	</tr>

  <?php  } ?>
  </table>
  </center>
</div>

</body>

</html>
