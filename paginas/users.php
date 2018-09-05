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
	<button type="button" class="btn btn-light" data-toggle="modal" data-target="#aguser">
  Ingresar Usuario
</button>
<div> </div>
<div class="container">
	<div class="panel panel-primary">
	    <div class="panel-heading"><h3>Lista de Usuarios</h3></div>
		<div class="panel-body" id="tabla">
			
		</div>
	</div>
</div>

<div class="modal fade" id="eluser" tabindex="-1" role="dialog" aria-labelledby="eluserLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="eluserLabel">Eliminar Usuario</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="forme" method="POST">
				<div class="input-group">
			    <input readonly="readonly" type="text" class="form-control" placeholder="Ingrese Correo usuario" name="elc" id="elc"  >
			    <div class="input-group-btn">
			      <button  class="btn btn-default" name="elu" id="elu" type="submit" >
			        Eliminar
			      </button>
			    </div>
			  
				</div>
				<div class="row">
					<div class="col-md-12"> </div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
	  					<label for="usr">Nombre:</label>
	  					<input readonly="readonly" type="text" class="form-control" id="enom" name="enom" >
					</div>
					<div class="form-group col-md-6">
	  					<label for="usr">Apellido:</label>
	  					<input readonly="readonly" type="text" class="form-control" id="eap" name="eap" >
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12"> </div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
  						<label for="pwd">Contraseña:</label>
  						<input readonly="readonly" type="text" class="form-control" id="econ" name="econ" >
					</div>
					<div class="form-group col-md-6">
  						<label for="pwd">Id:</label>
  						<input readonly="readonly" type="text" class="form-control" id="eid" name="eid" >
					</div>
					</div>
				</div>
			</form>
			<div id="resp"></div>
      
    </div>
  </div>
</div>
<div> </div>
<div class="modal fade" id="moduser" tabindex="-1" role="dialog" aria-labelledby="moduserLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="moduserLabel">Modificar Usuario</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="formm" method="POST">
				<div class="input-group">
			    <input disabled type="text" class="form-control" placeholder="Ingrese Correo usuario" name="muser" id="muser" >
			    <div class="input-group-btn">
			      <button class="btn btn-default" name="modu" id="modu" type="submit">
			        Modificar
			      </button>
			    </div>
			  
				</div>
				<div class="row">
					<div class="col-md-12"> </div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
	  					<label for="usr">Nombre:</label>
	  					<input type="text" class="form-control" id="mnom" name="mnom" >
					</div>
					<div class="form-group col-md-6">
	  					<label for="usr">Apellido:</label>
	  					<input type="text" class="form-control" id="map" name="map" >
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12"> </div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
  						<label for="pwd">Contraseña:</label>
  						<input type="text" class="form-control" id="mcon" name="mcon" >
					</div>
					<div class="form-group col-md-6">
  						<label for="pwd">Id:</label>
  						<input readonly="readonly" type="text" class="form-control" id="mid" name="mid" >
					</div>
					</div>
				</div>
			</form>
			<div id="res"></div>
      
    </div>
  </div>
</div>
<div> </div>
<div class="modal fade" id="aguser" tabindex="-1" role="dialog" aria-labelledby="aguserLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="aguserLabel">Ingrese Usuario</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
<div> </div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load("listausuarios.php");
	});
</script>
    <script src="/Pelis/js/crud.js"></script>
	<script src="/Pelis/js/validar.js"></script>
    <script src="/Pelis/includes/js/jquery-1.11.2.js"></script>
    <script src="/Pelis/includes/js/bootstrap.js"></script>
</body>
</html>
