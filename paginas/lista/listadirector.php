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