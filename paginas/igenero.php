<?php require('bd/bdgeneros.php'); ?>
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
	<title>Ingrese Genero</title>
	<script src="/Pelis/includes/js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/estilos.css">	
</head>
<body>
<?php require("barra.php");  ?>

<div class="container">
	<div class="panel panel-primary">
	    <div class="panel-heading"><h3>Ingrese Genero</h3></div>
		<div class="panel-body">
			<form id="formulario" method="post">
				<div class="input-group">
			    <input type="text"  class="form-control" placeholder="Ingrese Genero"  id="gen" name="gen" >
			    <div class="input-group-btn">
			      <button class="btn btn-default" name="ingg" id="ingg" type="button" onclick="return validagen()">
			        Ingresar
			      </button>
			    </div>
							</div>
			  	<!--<div id="resultado"></div>-->
				</div>
			</form>
		</div>
	</div>
</div>
<div class="container">
	<div class="panel panel-primary">
	    <div class="panel-heading"><h3>Lista de Generos</h3></div>
		<div class="panel-body">
			<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Generos</th> 
			      </tr>
			    </thead>
			    <tbody>
			      	<?php require('lista/listageneros.php');  ?>
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
