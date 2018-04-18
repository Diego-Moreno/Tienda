<?php
include ('config.php');

  $vnom = $_POST['inom'];
  $vmarca = $_POST['imarca'];
  $vstock = $_POST['istock'];
  $vcate = $_POST['icate'];
  $vdesc = $_POST['idesc'];
  $vprecio = $_POST['iprecio'];
  $vpreof = $_POST['iprecioof'];
  $vimagen = $_POST['iimagen'];
  $btnagregar = $_POST['btnagregar'];
  
  //echo $vnom, $vmarca , $vstock , $vcate, $vdesc , $vprecio, $vpreof , $vimagen ;
  if($btnagregar != null){
   $sql = "insert into productos(nombre_prod,marca,stock,categoria_id,descripcion,precio,imagen,precio_oferta) 
   values ('".$vnom."','".$vmarca."',".$vstock.",".$vcate.",'".$vdesc."',".$vprecio.",'".$vimagen."',".$vpreof.")";
   
      if (isset($vnom) or isset($vmarca) ){		  
	   
	   $result = mysqli_query($connect,$sql);
	   mysqli_close($connect);
	  }
  }
  
  if($_POST['btnbuscar']){
	  echo 'holaaaa';
	  
  }
  
  
?>
<!--<script type="text/javascript"> 
      alert('Su producto se ha ingresado con exito');
       window.location.replace('http://localhost:2222/market_pro/ingresar.php'); 
   
 </script> -->
	