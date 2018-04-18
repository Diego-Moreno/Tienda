<?php 
$titulopagina='Resgistro';
include('int/header.php'); ?>


<div class="jumbotron">

<div class="container">
  <h1>Registrarse</h1>

  <form class="form" method="post" action="index.php">
    <input type="text" class="email" placeholder="Nombre">

    <div>
      <p class="email-help">por favor ingresar su Nombre.</p>
    </div>

    <input type="email" class="contraseña" placeholder="Apellido paterno">
     <div>
      <p class="contraseña">por favor ingresar su Apellido.</p>
    </div>

    <input type="email" class="contraseña" placeholder="Apellido materno">
     <div>
      <p class="contraseña">por favor ingresar su Apellido.</p>
    </div>

    <input type="email" class="contraseña" placeholder="Email">
     <div>
      <p class="contraseña">por favor ingresar su Email.</p>
    </div>


  <input type="email" class="contraseña" placeholder="Contraseña">
     <div>
      <p class="contraseña">por favor ingresar su contraseña.</p>
    </div>


    <input type="email" class="contraseña" placeholder="Confirmar contraseña">
     <div>
      <p class="contraseña">por favor ingresar su contraseña.</p>
    </div>

    <input type="submit" class="submit" value="Registrar">
  </form>
</div>
</div>
<?php include('int/footer.php'); ?>
<!--

  if($email==NULL|$contrasena==NULL) {
?>
<script>
alert("faltan campos por llenar!");
location.href="index.php";
</script>


/*}
/*if (!preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/", $email)) {
exit('El formato del email ingresado no es correcto.');
}

-->