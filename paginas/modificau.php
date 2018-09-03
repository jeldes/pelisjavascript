<?php require('selectuser.php') 
 ?>
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
	<title>Modifique usuario</title>
	<script src="/Pelis/includes/js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/estilos.css">		
</head>
<body>
<?php require("barra.php");  ?>
<div class="container">
	<div class="panel panel-primary">
	    <div class="panel-heading"><h3>Modifique usuario</h3></div>
		<div class="panel-body">
			<form id="formm" method="POST">
				<div class="input-group">
			    <input disabled type="text" class="form-control" placeholder="Ingrese Correo usuario" name="user" id="user" value="<?php echo $user['Correo'];?>">
			    <div class="input-group-btn">
			      <button class="btn btn-default" name="modu" id="modu" type="submit">
			        Ingresar
			      </button>
			    </div>
			  
				</div>
				<div class="row">
					<div class="col-md-12"> </div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
	  					<label for="usr">Nombre:</label>
	  					<input type="text" class="form-control" id="nom" name="nom" value="<?php echo $user['NombreU'];?>">
					</div>
					<div class="form-group col-md-6">
	  					<label for="usr">Apellido:</label>
	  					<input type="text" class="form-control" id="ap" name="ap" value="<?php echo $user['ApellidoU'];?>">
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12"> </div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
  						<label for="pwd">Contraseña:</label>
  						<input type="text" class="form-control" id="con" name="con" value="<?php echo $user['Contrasena'];?>">
					</div>
					<div class="form-group col-md-6">
  						<label for="pwd">Id:</label>
  						<input readonly="readonly" type="text" class="form-control" id="id" name="id" value="<?php echo $user['IdUsuario'];?>">
					</div>
					</div>
				</div>
			</form>
			<div id="resultado"></div>
		</div>
	</div>
</div>
	<script src="/Pelis/js/crud.js"></script>
	<script src="/Pelis/js/validar.js"></script>
    <script src="/Pelis/includes/js/jquery-1.11.2.js"></script>
    <script src="/Pelis/includes/js/bootstrap.js"></script>
</body>
</html>
