<?php require('/bd/modifica.php'); 
	$conexion=conexion();

?>

			<table class="table table-striped" id="utabla">
			    <thead>
			      <tr>
			        <th>Correo</th>
			        <th>Nombre</th>
			        <th>Apellido</th>
			        <th>Contraseña</th>
			        <th>Modificar</th>
			        <th>Eliminar</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php 

			    		$sql="SELECT IdUsuario, Correo, NombreU, ApellidoU, Contrasena FROM usuario";
			    		$result=mysqli_query($conexion, $sql);
			    		while($ver=mysqli_fetch_row($result)){
			    			$datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4];

			    		

			    	 ?>
			    	<tr>
			    		<td><?php echo $ver[1]; ?></td>
			    		<td><?php echo $ver[2]; ?></td>
			    		<td><?php echo $ver[3]; ?></td>
			    		<td><?php echo $ver[4]; ?></td>
			    		<td><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#moduser" onclick="agregardatos('<?php echo $datos ?>')"><span class="glyphicon glyphicon-pencil" ></span></button></td>
			    		<td><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#eluser" onclick="eliminardatos('<?php echo $datos ?>')"><span class="glyphicon glyphicon-trash"></span></button></td>
			    	</tr>
						<?php } ?>
			      	<?php
						

