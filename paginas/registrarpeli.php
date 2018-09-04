<?php 
session_start();
if (@! $_SESSION['email']) {
	header("location:../index.php");
}
?>
<?php 
require("bd/bdpeliculas.php");
$peli=$_REQUEST['peli'];
if ($peli=="") {
	echo "<center><h3>Debe ingresar una Pelicula</h3></center>";
	exit;
}
if ($_REQUEST['duraccion']=="" || $_REQUEST['duraccion']<1 ) {
	echo "<center><h3>Debe ingresar una duraccion valida</h3></center>";
	exit;
}

				for($i=0; $i<$peliculas; $i++){
					if ($_REQUEST['peli']==$peliculas['Titulo']) {
						echo "<center><h3>La Pelicula ya existe</h3></center>";
						$peliculas=mysql_fetch_array($ejecuta);
						goto aqui;
					}
					$peliculas=mysql_fetch_array($ejecuta);
				}

				 	include('bd/conexion.php');
					//servidor,usuario y contraseña
					if (!conexion) { /*la negacion del if*/
						die('No he podido conectar: '.mysql_error());
					}
					//seleccionar la base de datos
					mysql_select_db("todopeliculas",$conexion);
					
					$query = "SELECT COUNT(*) FROM peliculas;"; 
					$result = mysql_query($query);
					$count = mysql_fetch_array($result);
					// las intruccion de insertar

					$total=$count[0] + 1;
					mysql_query("INSERT INTO todopeliculas.peliculas (idPeliculas, Titulo, Puntaje, Clasificacion, Ano, Duracion, Codigo, IdGenero) VALUES (NULL,'".$_REQUEST['peli']."','".$_REQUEST['puntuacion']."','".$_REQUEST['categoria']."','".$_REQUEST['ano']."','".$_REQUEST['duraccion']."','".$_REQUEST['pais']."','".$_REQUEST['genero']."')");
					//$insertar="INSERT INTO peliculas (idPeliculas, Titulo, Puntaje, Clasificacion, Ano, Duracion, Codigo, IdGenero) VALUES (NULL,'".$_REQUEST['peli']."','".$_REQUEST['puntuacion']."','".$_REQUEST['categoria']."','".$_REQUEST['ano']."','".$_REQUEST['duraccion']."','".$_REQUEST['pais']."','".$_REQUEST['genero']."',)";
					
					mysql_query("INSERT INTO todopeliculas.peliculadirector (idPeliculas, idDirector) VALUES (NULL,'".$_REQUEST['director']."')");
					//$insertar="INSERT INTO todopeliculas.peliculadirector (idPeliculas, idDirector) VALUES ('".$total. "','".$_REQUEST['director']."')";
					//echo $insertar;
					echo "<center><h3>Se ha ingresado la pelicula $peli</h3></center>";
					mysql_close($conexion);
				 	//header("location:ipeliculas.php");	
				  aqui:
				  echo " ";

?>
