<?php
	for($h=1; $h<$user; $h++){
		echo "<tr>";
		echo "<td>";
		echo $user['Correo'];
		echo "</td>";
		echo "<td>";
		echo $user['NombreU'];
		echo "</td>";
		echo "<td>";
		echo $user['ApellidoU'];
		echo "</td>";
		echo "<td>";
		echo $user['Contrasena'];
		echo "</td>";
		echo "<td>";
		echo "</td>";
		echo "<td>";
		echo '<a href="modificau.php?id='.$user['IdUsuario'].'"><button class="btn btn-default" name="'.$h.'" type="submit"><span class="glyphicon glyphicon-pencil"></span></button></a>';
		echo "</form>";
		echo "</td>";
		echo "<td>";
		echo "</td>";
		echo "<td>";
		echo '<a onclick="return selim();" href="eluser.php?id='.$user['IdUsuario'].'"><button class="btn btn-default" name="'.$h.'" " type="submit"><span class="glyphicon glyphicon-trash"></span></button>';
        
		echo "</form>";
		echo "</td>";
		echo "<td>";
		$user=mysql_fetch_array($pl);
	} 
	//<a href="eluser.php?id='.$user['IdUsuario'].'">
?>
