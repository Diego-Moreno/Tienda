<?php

 include('int/header.php'); ?>

<!DOCTYPE html>
	<html lang="es">
		<head>	
           <meta charset="utf-8" />		
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
         
            $sql = "select id_producto,nombre_prod,marca,precio,descripcion, nombre_categ, imagen from productos inner join categorias on categoria_id = id_categoria where nombre_categ = 'Telefonia'";
  
           $result = mysqli_query($connect,$sql);
           $total = mysqli_num_rows($result);
	          if ($row = mysqli_fetch_array($result)) {
?>
                 
<?php
	                  do {
?>
                         <form class="container">
	                     <div class="card-group" >
						  <div class="card" width="40%">
						   <br>
	                       <br>
						     <?php $imagenpro = $row['imagen'];?>
						   <?php echo "<img class='card-img-top' src='$imagenpro'></img>"?>
						   <?php $idproducto = $row['id_producto'];?>
	                          <div class="card-body">
						   <h2 class="card-title"> Nombre: <?php echo $row['nombre_prod']; ?><br> </p>
						   <p class="card-text"> Marca: <?php echo $row['marca']; ?><br> </p>
						   <p class="card-text"> Descripción: <?php echo $row['descripcion']; ?><br> </p>
						   <p><?php echo "<a class='btn btn-danger' href='oferta.php?id=". $idproducto."'>precio:". $row['precio'] ."</a>"?></p>
						   </div>
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