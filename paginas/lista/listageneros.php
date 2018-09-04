<?php require('../bd/bdgeneros.php'); ?>
<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Generos</th> 
			      </tr>
			    </thead>
			    <tbody>
			      	<?php
	for($i=0; $i<$genero; $i++){
		echo "<tr>";
		echo "<td>";
		echo $genero['NombreG'];
		echo "</td>";
		echo "</tr>";
		$genero=mysql_fetch_array($yu);
	} 
?>
			    </tbody>
			  </table>
