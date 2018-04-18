<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $titulopagina;   ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="navegacion-fm" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Los leones  </a>
            </div>
            <!--Inicio menu-->

            <div class="collapse navbar-collapse" id="navegacion-fm">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="ofertas.php">Oferta</a></li>
                    <li><a href="login.php">Login</a></li>
					<li><a href="registro.php">Registro</a></li>

                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Categorias 
                   <span class="caret"></span> </a>
                   <ul class="dropdown-menu" role="menu">
                    <li><a href="telefonia.php">Telefonia</a></li>
                    <li class="divider"></li>
                    <li><a href="televisores.php">TV y Smart TV</a></li>
                    <li><a href="computadores.php">Computadores y Tablets</a></li>
                    <li><a href="proyectores.php">Monitores Y Proyectores</a></li>

                   </ul>
               </li>
           


                </ul>
            

      
       
            <div class="collapse navbar-collapse" id="navegacion-fm">
                <ul class="nav navbar-nav">

 <form class="navbar-form navbar-right" role="form" action="ingresar.php">
            <button type="submit" action="ingresar.php" name="ingresar" value="ingresar" id="ingresa" class="btn btn-danger">Inicia sesión</button>
            </form>

                  
          <form class="navbar-form navbar-right" role="form" method="get" action="resultado.php">
            <div class="form-group">
              <input type="text" placeholder="Ingrese su busqueda"  class="form-control" name="palabra"  />
            </div>
            <button type="submit" action="resultado.php" name="buscador" value="buscar" id="buscador" class="btn btn-success">Buscar</button>
          </form>

         
        </div>
      </ul>
      </div>
      </div>
    </nav>

</body>
</html>

