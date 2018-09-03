<?php require("bd/bduser.php"); ?>
<!DOCTYPE html>
<?php 
session_start();
if (@! $_SESSION['email']) {
	header("location:../index.php");
}
if ($_SESSION['email']<>"n.jeldes@hotmail.com") {
	header("location:intro.php");
}
 ?>
<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Lista Usuarios</title>
	<script src="/Pelis/includes/js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/estilos.css">	
</head>
<body>
<?php require("barra.php");  ?>
<div class="container">
	<div class="panel panel-primary">
	    <div class="panel-heading"><h3>Lista Usuarios</h3></div>
		<div class="panel-body">
			<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Correo</th>
			        <th>Nombre</th>
			        <th>Apellido</th>
			        <th>Contraseña</th>
			      </tr>
			    </thead>
			    <tbody>
			      	<?php require("listausuarios.php")  	 ?>
			    </tbody>
			  </table>
		</div>
	</div>
</div>

    <script src="/Pelis/js/crud.js"></script>
	<script src="/Pelis/js/validar.js"></script>
    <script src="/Pelis/includes/js/jquery-1.11.2.js"></script>
    <script src="/Pelis/includes/js/bootstrap.js"></script>
</body>
</html>
