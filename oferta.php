<?php include('int/funciones.php');
      include "config.php";
 ?>
<?php
if (isset($_GET["id"]))
{
$idproducto= $_GET["id"];


}

$titulopagina='Oferta';

 include('int/header.php'); ?>
<?php
  
     $sql = "select nombre_prod,marca,precio,stock,descripcion,imagen from productos where id_producto =  ". $idproducto;
	 
	 $resultado = mysqli_query($connect,$sql);
	 
           $row = mysqli_fetch_array($resultado); 
            		   
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
</head>
<body>
<div class="jumbotron">
	<div class="container">
		<div class="row">
		   <div class="col-md-8">
		  
		           <?php $imagenpro = $row['imagen'];?>
						   <?php echo "<img src='$imagenpro'></img>"?>
			     <h2>Nombre:<i> <?php echo $row['nombre_prod'];?></i></h2>
				  <h2>Marca: <i><?php echo $row['marca'];?></i></h2>
				   <h2>Precio:<i><?php echo $row['precio'];?></i></h2>
				    <h2>Cantidad disponible: <i><?php echo $row['stock'];?></i></h2>
					 <h2>Descripción: <i><?php echo $row['descripcion'];?></i></h2>
			   
		   </div>

		    <div class="cold-md-4>">
			    <p><a class="btn btn-danger" href="#">Comprar:
				<strong> Ahora</strong> </a></p>
				<p><a class="btn btn-primary" href="#"> Agregar al carro</a></p>
			</div>
		  <?php 
			 
		      
		  ?>
		</div>
	</div>
</div>
</body>
</html>

<?php include('int/footer.php'); ?>