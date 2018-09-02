<?php require("bd/bdgeneros.php");
session_start();
if (@! $_SESSION['email']) {
	header("location:../index.php");
}
?>
<?php  
require("bd/bdgeneros.php");
$resultado="";
	for($n=0; $n<$genero; $n++){
					if ($_REQUEST['gen']==$genero[NombreG]) {
						$genero=mysql_fetch_array($yu);
						echo "<script>Genero ya existe</script>";
						$resultado="<p>El genero ".$_REQUEST['gen']." ha sido encontrado</p>" 

						goto aqui;
					}
			      		
			      		$genero=mysql_fetch_array($yu);
			      } 
			      mysql_query("INSERT INTO todopeliculas.generos (idGenero, NombreG) VALUES (NULL,'".$_REQUEST['gen']."')");
				mysql_close($conexion);
				header("location:igenero.php");
				 aqui:
				 echo " ";

//if ($resultado=="") {
//	echo "<p>El genero ".$_REQUEST['gen']." ha sido registrado</p>";
//}else{
//	echo $resultado;
//}
?>





