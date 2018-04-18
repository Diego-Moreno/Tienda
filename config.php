<?PHP

$host = "localhost"; 	//TU HOST//
$dbuser = "root";	 	//TU USUARIO DEL HOST//
$dbpwd = "";	//TU CONTRASEÑA//
$db = "tienda";		//TU BASE DE DATOS//

$connect = mysqli_connect($host, $dbuser, $dbpwd,$db) or die ('no se pudo conectar a la base de datos'.mysqli_error());

  
?>