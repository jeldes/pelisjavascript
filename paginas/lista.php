<?php require("bd/bdpeliculas.php");  ?>

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
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/estilos.css">	
</head>
<body>
<?php require("barra.php");  ?>


<div class="container">
	<div class="panel panel-primary">
      <div class="panel-heading"><h1>Lista de Peliculas</h1></div>
      	<div class="panel-body">
        
			  <table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Titulo</th>
			        <th>Puntaje</th>
			        <th>Clasificacion</th>
			        <th>Año</th>
			        <th>Duracion</th>
			        <th>Pais</th>
			        <th>Genero</th>
			        <th>Director</th>
			      </tr>
			    </thead>
			    <tbody>
			      	<?php require("listapeliculas.php")  	 ?>
			    </tbody>
			  </table>
		</div>
	</div>
</div>
	<script  src="/JPeli/js/validar.js"></script>
    <script src="/html/sitio1/includes/js/jquery-1.11.2.js"></script>
    <script src="/html/sitio1/includes/js/bootstrap.js"></script>
</body>
</html>