<?php  
	include('conexion.php');
	if (!$conexion){
		echo 'no se pudo establecer conexion con el seridor: '.mysql_error();
			}else{
				$base2=mysql_select_db('todopeliculas',$conexion);
				if(!$base2){
					echo 'no se encontro la base de datos: '.mysql_error();
				}else{
					$or="SELECT * FROM generos order by NombreG";
					$yu=mysql_query($or);
					if(!$yu){
						echo 'hay un error en la sentencia sql: '.$or;
					}else{
					$genero=mysql_fetch_array($yu);	
					}
				}
			}
?>