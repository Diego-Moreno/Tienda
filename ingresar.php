<?php

$titulopagina='Nosotros';

 include('int/header2.php'); 
 include('config.php');
 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ingresar</title>
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/bootstrap-theme.min.css">
     <link rel="stylesheet" href="css/main.css">
     <link rel="stylesheet" href="css/style.css">

  <style>
     .formulario{
		 padding:100px;
		
		background-color:#40F87D;
	 }
 </style>
 
 <script>
 
  function visible(){
	  
  document.getElementById('formularioprincipal').style.display = 'block';
  }
 </script>
 
</head>

<body>

  <form action="proceso.php" method="POST"  class="formulario">
<div class="container form-group row" id="formularioprincipal"> 
    <h1 align="center">Control de productos</h1>
	<div class="row">
	  
	    <label for="inom" class="col-sm-2 col-form-label"> Nombre de producto: </label>
		   <div class="col-6">
		      <input type="text" name="inom" id="inom" maxlength="30"/>
		    </div>
			
	    <label for="imarca" class="col-sm-2 col-form-label"> Marca: </label>
         	<div class="col-6">  
			  <input type='text' name="imarca" id="imarca" maxlength="30">
			</div>
	  
	   <label for="istock" class="col-sm-2 col-form-label">Stock: </label>
	       <div class="col-6">
	          <input type="number" min="0" name="istock" id="istock">
		   </div>
	   
	   <label for="icate" class="col-sm-2 col-form-label">Categoria: </label>
	         <div>
			    <select type="option" name="icate" id="icate"> 
	               <option value="1" class="col-6">Telefono</option>
			       <option value="2" class="col-6">Tv</option>
			       <option value="3" class="col-6">Computadoras</option>
				   <option value="4" class="col-6">Proyectores</option>
			    </select>
			 </div>
	   <div class="4"></div>
	   <label for="idesc" class="col-sm-2 col-form-label">Descripción: </label>
	        <div class="col-6">
	           <textarea type="text" name="idesc" id="idesc" cols="15" rows="5"  maxlength="350"></textarea>
		    </div>
	   
	   <label for="iprecio" class="col-sm-2 col-form-label">Precio: </label>
	      <div class="col-6">
		      <input type="number" min="0" name="iprecio" id="iprecio" />
		  </div>
	  
	   <label for="iprecioof" class="col-sm-2 col-form-label">Precio oferta: </label>
	        <div class="col-6">
	           <input type="number" min="0" name="iprecioof" id="iprecioof" />
		    </div>
	   
	   <label for="iimagen" class="col-sm-2 col-form-label">Imagen: </label>
	        <div class="col-6">
	            <input type="text" name="iimagen" id="iimagen" />
			</div> 
	   
	</div>
	
    <button  type="submit"  name="btnagregar" id="btnagregar" value="btnagregar">Agregar</button> 
	<button  type="submit"  name="btnbuscar">Buscar</button> 
	<button  type="submit"  name="btnmodificar">Actualizar</button>
	<button  type="submit"  name="btneliminar">Eliminar</button>
</div>	
</form>
	
</body>

</html> 
<?php include('int/footer.php'); ?>






