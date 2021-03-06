<?php require('bd/bddirector.php'); ?>
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
	<title>Ingrese Director/a</title>
	<script src="/Pelis/includes/js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/estilos.css">	
</head>
<body>
<?php require("barra.php");  ?>
<div class="container">
	<button type="button" class="btn btn-light" data-toggle="modal" data-target="#direcmodal">
  		Ingresar Director/a
	</button>
	
</div>

<div> </div>

<div class="container">
	<div class="panel panel-primary">
	    <div class="panel-heading"><h3>Lista de Directores</h3></div>
		<div class="panel-body">
			<div class="panel-body" id="tabla">
		</div>
	</div>
</div>

<div class="modal fade" id="direcmodal" tabindex="-1" role="dialog" aria-labelledby="direcmodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="direcmodalLabel">Ingrese Director/a</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="formd" method="post">
				<div class="input-group">
			    <input type="text" class="form-control" placeholder="Ingrese Director" name="direc" id="direc">
			    <div class="input-group-btn">
			      <button class="btn btn-default" name="ingd" id="ingd" type="button" onclick="return validadir()">
			        Ingresar
			      </button>
			    </div>
			  	
				</div>
				<div id="resultado"></div>
			</form>
      
    </div>
  </div>
</div>



	<script src="/Pelis/js/crud.js"></script>
	<script src="/Pelis/js/validar.js"></script>
    <script src="/Pelis/includes/js/jquery-1.11.2.js"></script>
    <script src="/Pelis/includes/js/bootstrap.js"></script>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load("lista/listadirector.php");
	});
</script>