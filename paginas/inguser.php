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
	<title>Ingrese nuevo usuario</title>
	<script src="/Pelis/includes/js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/estilos.css">	
</head>
<body>
<script>
$(function(){
	$("#ingu").click(function(){
		var url="registraruser.php";
		$.ajax({
			type:"post",
			url:url,
			data:$("#formu").serialize(),
			success:function(data){
				$("#resultado").html(data);
			}
		});
	return false;	
	});
});	
</script>
<?php require("barra.php");  ?>
<div class="container">
	<div class="panel panel-primary">
	    <div class="panel-heading"><h3>Ingrese Nuevo Usuario</h3></div>
		<div class="panel-body">
			<form id="formu" method="POST">
				<div class="input-group">
			    <input type="email" class="form-control" placeholder="Ingrese Correo usuario" name="user">
			    <div class="input-group-btn">
			      <button class="btn btn-default" name="ingu" id="ingu" type="submit">
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
	  					<input type="text" class="form-control" id="nom" name="nom" placeholder="Ej:Ana">
					</div>
					<div class="form-group col-md-6">
	  					<label for="usr">Apellido:</label>
	  					<input type="text" class="form-control" id="ap" name="ap" placeholder="Ej:Castillo">
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12"> </div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
  						<label for="pwd">Contraseña:</label>
  						<input type="password" class="form-control" id="con" placeholder="Ingrese Contraseña" name="con">
					</div>
					<div class="form-group col-md-6">
  						<label for="pwd">Repita Contraseña:</label>
  						<input type="password" class="form-control" id="con2" placeholder="Ingrese Contraseña Nuevamente" name="con2">
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
