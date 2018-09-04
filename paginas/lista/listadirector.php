<?php require('../bd/bddirector.php'); ?>
<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Director</th> 
			      </tr>
			    </thead>
			    <tbody>
			      	<?php
	for($i=0; $i<$director; $i++){
		echo "<tr>";
		echo "<td>";
		echo $director['NombreD'];
		echo "</td>";
		echo "</tr>";
		$director=mysql_fetch_array($ds);
	} 
?>
			    </tbody>
			  </table>

