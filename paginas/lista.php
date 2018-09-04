<!DOCTYPE html>
<?php 
session_start();
if (@! $_SESSION['email']) {
	header("location:../index.php");
}
 ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Lista peliculas </title>
	<script src="/Pelis/includes/js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/estilos.css">	
</head>
<body>
<?php require("barra.php");  ?>


<div class="container">
	<div class="panel panel-primary">
      <div class="panel-heading"><h1>Lista de Peliculas</h1></div>
      	<div class="panel-body">
        <div id="tabla"></div>
			  
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load("lista/listapeliculas.php");
	});
</script>
	<script src="/Pelis/js/crud.js"></script>
	<script src="/Pelis/js/validar.js"></script>
    <script src="/Pelis/includes/js/jquery-1.11.2.js"></script>
    <script src="/Pelis/includes/js/bootstrap.js"></script>
</body>
</html>