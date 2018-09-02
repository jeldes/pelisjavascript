<?php 
session_start();
if (@! $_SESSION['email']) {
	header("location:../index.php");
}
?>
<?php 
require("bd/bddirector.php");
$dir=$_REQUEST['direc'];
if ($dir=="") {
	echo "<center><h3>Debe ingresar un director</h3></center>";
	exit;
}
for($p=0; $p<$director; $p++){
	if ($dir==$director[NombreD]) {
		$director=mysql_fetch_array($ds);
		//echo $dir;
		echo "<h3>El Director $dir ya existe</h3>";
		//echo $dir;
		exit;
	}
	$director=mysql_fetch_array($ds);
} 
	mysql_query("INSERT INTO todopeliculas.director (idDirector, NombreD) VALUES (NULL,'".$_REQUEST['direc']."')");
    mysql_close($conexion);
    echo "<h3>Director Registrado</h3>";
	//header("location:idirector.php");
	
	aqui:
	echo " ";

?>