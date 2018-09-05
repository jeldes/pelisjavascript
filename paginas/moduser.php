<?php 
session_start();
if (@! $_SESSION['email']) {
	header("location:../index.php");
}
?>
<?php 

$id= $_REQUEST['mid'];
$_REQUEST['muser'];
$nom= $_REQUEST['mnom'];
$ap= $_REQUEST['map'];
$con= $_REQUEST['mcon'];

if ($_REQUEST['mid']=="") {
	echo "<center><h3>No hay id</h3></center>";
	exit;
}

if ($nom=="") {
	echo "<center><h3>No hay Nombre</h3></center>";
	exit;
}
if ($ap=="") {
	echo "<center><h3>No hay Apellido</h3></center>";
	exit;
}
if ($con=="") {
	echo "<center><h3>No hay Contraseña</h3></center>";
	exit;
}
include('bd/conexion.php');
	if (!$conexion){
		echo 'no se pudo establecer conexion con el seridor: '.mysql_error();
			}else{
				$base2=mysql_select_db('todopeliculas',$conexion);
				if(!$base2){
					echo 'no se encontro la base de datos: '.mysql_error();
				}else{
					$mn="UPDATE usuario SET NombreU='".$nom."', ApellidoU='".$ap."', Contrasena='".$con."'  WHERE IdUsuario=".$id."";
					$pl=mysql_query($mn);
					
					if(!$pl){
						echo 'hay un error en la sentencia sql: '.$mn;
						
					}else{

					//$user=mysql_fetch_array($pl);
					}
				}
			}
	echo "<center><h3>Se ha modificado al usuario</h3></center>";
 ?>