<?php include('int/funciones.php'); ?>
<?php

$titulopagina='Inicio Marketpro';
$pagina="inicio";

 include('int/header.php'); ?>

<div class="jumbotron">
	<div class="container">
<h1>Bienvenido a la tienda online</h1>
      	<p>Los mejores productos a un bajo costo</p> 
</div>
</div>

<!-- Destacados -->
<div class="container"> 
      <div class="row">

    <?php
    $ver=1;
	$ofertas;
 	while($ver<=2 and list($oferta_id, $oferta)=each($ofertas))
 	{
 		echo portada($oferta_id,$oferta);
 		$ver++;
 	}
 	
    ?>
        </div>
      

      <hr>

  </div>
 <!-- Destacados -->
     
  

<?php include('int/footer.php'); ?>
    

