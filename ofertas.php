<?php

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
         $imagenpro='';
            $sql = "select id_producto,nombre_prod,marca,precio,descripcion,categoria_id,imagen from productos";
  
           $result = mysqli_query($connect,$sql);
           $total = mysqli_num_rows($result);
	          if ($row = mysqli_fetch_array($result)) {
?>
                 
<?php
                     $idproducto='';
	                  do {
?>
                         
						 <form class="container slider d-flex" >
	                     <div class="row justify-content-between" >
						  <div class="col-3">
						   <br>
	                       <br>
						   
						  <?php $imagenpro = $row['imagen'];?>
						   <?php echo "<img src='$imagenpro'></img>"?>
						   <h2> id producto :<?php echo $idproducto=$row['id_producto']; ?></h2><br> 
						   <h2> Nombre: <?php echo $row['nombre_prod']; ?><br></h2>
						   <h3> Marca: <?php echo $row['marca']; ?><br> </h3>
						   <h3> Descripción: <?php echo $row['descripcion']; ?><br> </h3>
						   <p><?php echo "<a class='btn btn-danger' href='oferta.php?id=". $idproducto."'>precio:". $row['precio'] ."</a>"?></p>
						  </div>
	                      </div>
	                     </form>
<?php
}
	while ($row = mysqli_fetch_array($result));
}
	else
{
?>
	
<?php
}


?>


</body>
</html>
<?php include('int/footer.php'); ?>