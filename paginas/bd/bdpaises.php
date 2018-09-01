<?php  
	include('conexion.php');
	if (!$conexion){
		echo 'no se pudo establecer conexion con el seridor: '.mysql_error();
			}else{
				$base2=mysql_select_db('todopeliculas',$conexion);
				if(!$base2){
					echo 'no se encontro la base de datos: '.mysql_error();
				}else{
					$ps="SELECT * FROM paises order by Pais";
					$rs=mysql_query($ps);
					if(!$rs){
						echo 'hay un error en la sentencia sql: '.$ps;
					}else{
					$paises=mysql_fetch_array($rs);	
					}
				}
			}
?>