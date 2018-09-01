<?php  
	include('conexion.php');
	if (!$conexion){
		echo 'no se pudo establecer conexion con el seridor: '.mysql_error();
			}else{
				$base2=mysql_select_db('todopeliculas',$conexion);
				if(!$base2){
					echo 'no se encontro la base de datos: '.mysql_error();
				}else{
					$qw="SELECT * FROM director order by NombreD";
					$ds=mysql_query($qw);
					if(!$ds){
						echo 'hay un error en la sentencia sql: '.$qw;
					}else{
					$director=mysql_fetch_array($ds);	
					}
				}
			}
?>