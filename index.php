<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Ingreso Todo peliculas </title>
	<script src="/Pelis/includes/js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/estilos.css">	
</head>
<body>

<div class="container">
  <center><img src="/Pelis/imagenes/logo.png" width="50%"></center>
 </div>

<div class="container">
	<div class="panel panel-primary">
      <div class="panel-heading"><h1>INGRESE</h1></div>
      <div class="panel-body">
      	<form action="validar.php" method="POST">
		    <div class="form-group">
		      <label for="email">Email:</label>
		      <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese email" name="email" >
		    </div>
		    <div class="form-group">
		      <label for="contraseña">Contraseña:</label>
		      <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese contraseña" name="contrasena" >
		    </div>
		    <button type="submit" id="iboton" name="iboton" class="btn btn-default" onclick="return validar()">Ingresar</button>
		    
  		</form>
      </div>
    </div>
	
<script src="/pelis/js/validar.js"></script>

</div>







	<script  src="/JPeli/js/validar.js"></script>
    <script src="/JPeli/includes/js/jquery-1.11.2.js"></script>
    <script src="/JPeli/includes/js/bootstrap.js"></script>
</body>
</html>