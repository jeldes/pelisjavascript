<?php require("bd/bdpeliculas.php");  ?>
<?php require("bd/bdpaises.php");  ?>
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
	<title>Buscador</title>
	<script src="/Pelis/includes/js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/estilos.css">	
</head>
<?php require("barra.php");  ?>

<body>
	<script type="text/javascript">columna=0;</script>
<div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading" id="prueba"><h3>Buscador</h3></div>
	    <div class="panel-body">

			  <div class="input-group">
			  
			  	<input type="text" class="form-control" placeholder="Buscar" id="titulo" name="titulo" onkeyup="myFunction()">
			    
			    <div class="input-group-btn">
			      <button class="btn btn-default" id="buscar" name="buscar" >
			       Seleccionar</i>
			      </button>
			    </div>
			  </div>
				<br>
				
				<SELECT id="opt" name="opt">
					<option value="pelicula">Pelicula</option>
					<option value="director">Director</option>
					<option value="genero">Genero</option>
					<option value="ano">Año</option>
					<option value="puntaje">Puntaje</option>
					<option value="pais">Pais</option>
					<option value="duracion">Duracion</option>
					<option value="clasificacion">Clasificacion</option>		
				</SELECT>
		      	 
						
  		</div>
    </div>
</div>
<div class="container">
	<div class="panel panel-primary">
      <div class="panel-heading"><h1>Lista de Peliculas</h1></div>
      	<div class="panel-body" id="tabla">
        
			  
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