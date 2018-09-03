<?php 
 $i=$_REQUEST['id'];
$f=$_REQUEST['id'];
 
	include('bd/conexion.php');
	if (!$conexion){
		echo 'no se pudo establecer conexion con el seridor: '.mysql_error();
			}else{
				$base2=mysql_select_db('todopeliculas',$conexion);
				if(!$base2){
					echo 'no se encontro la base de datos: '.mysql_error();
				}else{
					$mn="SELECT * FROM usuario WHERE IdUsuario=".$i."";
					$pl=mysql_query($mn);
					if(!$pl){
						echo 'hay un error en la sentencia sql: '.$mn;
					}else{
					$user=mysql_fetch_array($pl);

					}
				}
			}
?>