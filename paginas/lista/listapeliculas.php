<?php require("../bd/bdpeliculas.php");  ?>
<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Titulo</th>
			        <th>Puntaje</th>
			        <th>Clasificacion</th>
			        <th>Año</th>
			        <th>Duracion</th>
			        <th>Pais</th>
			        <th>Genero</th>
			        <th>Director</th>
			      </tr>
			    </thead>
			    <tbody>
<?php
	for($i=0; $i<$peliculas; $i++){
		echo "<tr>";
		echo "<td>";
		echo $peliculas['Titulo'];
		echo "</td>";
		echo "<td>";
		echo $peliculas['Puntaje'];
		echo "</td>";
		echo "<td>";
		echo $peliculas['Clasificacion'];
		echo "</td>";
		echo "<td>";
		echo $peliculas['Ano'];
		echo "</td>";
		echo "<td>";
		echo $peliculas['Duracion'];
		echo "</td>";
		echo "<td>";
		echo $peliculas['Pais'];
		echo "</td>";
		echo "<td>";
		echo $peliculas['NombreG'];
		echo "</td>";
		echo "<td>";
		echo $peliculas['NombreD'];
		echo "</td>";
		echo "</tr>";
		$peliculas=mysql_fetch_array($ejecuta);
	} 
?>
			    </tbody>
			  </table>

