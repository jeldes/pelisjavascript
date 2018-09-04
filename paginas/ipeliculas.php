<?php require("bd/bdpeliculas.php");  ?>
<?php require("bd/bdpaises.php");  ?>
<?php require("bd/bdgeneros.php");  ?>
<?php require("bd/bddirector.php");  ?>
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
	<title>Ingrese pelicula</title>
	<script src="/Pelis/includes/js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/Pelis/includes/estilos.css">		
</head>
<body>
<?php require("barra.php");  ?>
<div class="container">
	<button type="button" class="btn btn-light" data-toggle="modal" data-target="#pelimodal">
  		Ingresar Pelicula
	</button>
	
</div>

<div> </div>
<div class="container">
	<div class="panel panel-primary">
	    <div class="panel-heading"><h3>Lista de Peliculas</h3></div>
		<div class="panel-body">
			<div class="panel-body" id="tabla">
		</div>
	</div>
</div>

<div class="modal fade" id="pelimodal" tabindex="-1" role="dialog" aria-labelledby="pelimodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="pelimodalLabel">Ingrese Genero</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="formp" method="POST">
				<div class="input-group">
			    <input type="text" class="form-control" placeholder="Ingrese la pelicula" name="peli" id="peli" required>
			    <div class="input-group-btn">
			      <button class="btn btn-default" name="ingp" id="ingp" type="submit">
			        Ingresar
			      </button>
			    </div>
			  </div>
			  <div class="row">
			  	<div class="col-md-12"> </div>
			  </div>
				<div class="row">
					<div class="col-md-6">
						Duraccion
						<input type="number" name="duraccion" id="duraccion">
					</div>
					<div class="col-md-6">
						<tr class="active">
						<td>Genero</td>
							<td>
							<SELECT id="genero" name="genero">
						<?php
			      		for($n=0; $n<$genero; $n++){
			      			echo '<option value='.$genero[idGenero].'>'.$genero[NombreG].'</option>';
			      			$genero=mysql_fetch_array($yu);
			      		} 

			      	 ?>
			      	 	</SELECT>
					</div>
				</div>
				<div class="row">
			  	<div class="col-md-12"> </div>
			  	</div>
				<div class="row">	
					<div class="col-md-6">
						<tr class="active">
						<td>Pais</td>
							<td>
							<SELECT id="pais" name="pais">
								
						<?php
			      		for($i=0; $i<$paises; $i++){
			      			echo '<option value='.$paises[Codigo].'>'.$paises[Pais].'</option>';
			      			$paises=mysql_fetch_array($rs);
			      		} 

			      	 ?>
			      	 	</SELECT>
							
						</td>
						</tr>
					</div>
					<div class="col-md-6">
						<tr class="active">
						<td>Puntuacion</td>
							<td>
							<SELECT id="puntuacion" name="puntuacion">
								<?php
								 for ($x=0; $x<11; $x++)
								 	echo "<option value=$x>$x</option>"
								 ?>
							</SELECT>
							</td>
						</tr>
					</div>
				</div>
				<div class="row">
			  	<div class="col-md-12"> </div>
			  	</div>
				<div class="row">
					<div class="col-md-6">
						<tr class="active">
						<td>Año</td>
							<td>
							<SELECT id="ano" name="ano">
							<?php
								 for ($a=1895; $a<=2100; $a++)
								 	echo "<option value=$a>$a</option>"
								 ?>	
							</SELECT>
							</td>
						</tr>
					</div>
					<div class="col-md-6">
						<tr class="active">
						<td>Director</td>
							<td>
							<SELECT id="director" name="director">
							<?php
								 
			      				for($p=0; $p<$director; $p++){
			      				echo '<option value='.$director[idDirector].'>'.$director[NombreD].'</option>';
			      				$director=mysql_fetch_array($ds);
			      				} 

			      	 		?>
							</SELECT>
							</td>
						</tr>
					</div>
				</div>	
				<div class="row">
			  	<div class="col-md-12"> </div>
			  	</div>
			  	<div class="row">	
					<div class="col-md-12">
						<tr>
						<td>Categoria</td>
							<td class="active">
							<SELECT id="categoria" name="categoria">
							<option value="Mayores 18 años">Mayores de 18 años</option>
							<option value="Mayores 13 años">Mayores de 13 años </option>
							<option value="Todos los públicos">Todos los públicos</option>
							<option value="Sin definir">Sin definir</option>	
							</SELECT>
							</td>
						</tr>
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
		$('#tabla').load("lista/listapeliculas.php");
	});
</script>
	<script src="/Pelis/js/crud.js"></script>
	<script src="/Pelis/js/validar.js"></script>
    <script src="/Pelis/includes/js/jquery-1.11.2.js"></script>
    <script src="/Pelis/includes/js/bootstrap.js"></script>
</body>
</html>
