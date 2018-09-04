<?php require("bd/bdgeneros.php");
session_start();
if (@! $_SESSION['email']) {
	header("location:../index.php");
}
?>
<?php  
require("bd/bdgeneros.php");
$resultado="";
if ($_REQUEST['gen']=="") {
	echo "<center><h3>Debe ingresar genero</h3></center>";
	exit;
}
	for($n=0; $n<$genero; $n++){
					if ($_REQUEST['gen']==$genero[NombreG]) {
						$genero=mysql_fetch_array($yu);
						echo "<center><h3>Genero ya existe</h3></center>";
						exit;

						goto aqui;
					}
			      		
			      		$genero=mysql_fetch_array($yu);
			      } 
			      mysql_query("INSERT INTO todopeliculas.generos (idGenero, NombreG) VALUES (NULL,'".$_REQUEST['gen']."')");
				mysql_close($conexion);
				echo "<center><h3>Ingresado el genero ".$_REQUEST['gen']."</h3></center>";
				//header("location:../lista/listageneros.php");
				
				 aqui:
				 echo " ";

//if ($resultado=="") {
//	echo "<p>El genero ".$_REQUEST['gen']." ha sido registrado</p>";
//}else{
//	echo $resultado;
//}
?>





