<?php

$titulopagina='resultados';

 include('int/header.php'); ?>

<!DOCTYPE html>
	<html>
		<head>			
		</head>
		<body>
			<div class="jumbotron">
	<div class="container">
<h1>Bienvenido a la tienda online</h1>
      	<p>Los mejores productos a un bajo costo</p> 
</div>
</div>


<?php
	
		include ('config.php');
?>

<?php 
	if ($_GET['buscador'])
		{
			$buscar = $_GET['palabra'];
if (empty($buscar))
	{
?>
	<h1><?php echo "No se ha ingresado ninguna palabra"; ?></h1><?php	
    }
     else
         {
            $sql = "select nombre_prod,marca,precio,descripcion,imagen from productos where nombre_prod LIKE '%".$buscar."%' or marca LIKE '%".$buscar."%' ";
           $result = mysqli_query($connect,$sql);
           $total = mysqli_num_rows($result);
	          if ($row = mysqli_fetch_array($result)) {
?>
                 <h1><?php echo "Resultados para: $buscar "; ?></h1>
                 <h1><?php echo "Total de resultados: $total"; ?></h1>
<?php
	                  do {
?>
                         <form>
	                       <br>
	                       <br>
						     <?php $imagenpro = $row['imagen'];?>
						   <?php echo "<img src='$imagenpro'></img>"?>
	                       <h1> Nombre: <?php echo $row['nombre_prod']; ?><br> </h1>
						   <h1> Marca: <?php echo $row['marca']; ?><br> </h1>
						   <h1> Precio: $<?php echo $row['precio']; ?><br> </h1>
						   <h4> Descripción: <?php echo $row['descripcion']; ?><br> </h1>
						   
	                      
	                     </form>
<?php
}
	while ($row = mysqli_fetch_array($result));
}
	else
{
?>
	<h1><?php echo "No se encontraron resultados para: $buscar"; ?></h1>
<?php
}
}
}
?>


</body>
</html>



<?php include('int/footer.php'); ?>