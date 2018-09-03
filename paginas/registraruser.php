<?php 
session_start();
if (@! $_SESSION['email']) {
	header("location:../index.php");
}
?>
<?php 
require("bd/bduser.php");
if ($_REQUEST['user']=="") {
	echo "<center><h3>Debe ingresar un Correo</h3></center>";
	exit;
}
if ($_REQUEST['con']=="") {
	echo "<center><h3>Debe ingresar una Contraseña</h3></center>";
	exit;
}
if ($_REQUEST['con2']=="") {
	echo "<center><h3>Debe repetir Contraseña</h3></center>";
	exit;
}
if ($_REQUEST['nom']=="") {
	echo "<center><h3>Debe ingresar un Nombre</h3></center>";
	exit;
}
if ($_REQUEST['ap']=="") {
	echo "<center><h3>Debe ingresa Apellido</h3></center>";
	exit;
}

if ($_REQUEST['con']<>$_REQUEST['con2']) {
	echo "<center><h3>Contraseñas deben coincidir</h3></center>";
	exit;
}
for($p=0; $p<$user; $p++){
	if ($_REQUEST['user']==$user[Correo]) {
		$user=mysql_fetch_array($pl);
		echo "<center><h3>Usuario ya existe</h3></center>";
		exit;
	}
$user=mysql_fetch_array($pl);
} 
mysql_query("INSERT INTO todopeliculas.usuario (IdUsuario, Correo, NombreU, ApellidoU, Contrasena) VALUES (NULL,'".$_REQUEST['user']."', '".$_REQUEST['nom']."', '".$_REQUEST['ap']."', '".$_REQUEST['con']."' )");
echo "<center><h3>Usuario Registrado exitosamente</h3></center>";
mysql_close($conexion);



?>
