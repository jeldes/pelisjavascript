<?php  
	include('conexion.php');
	if (!$conexion){
		echo 'no se pudo establecer conexion con el servidor: '.mysql_error();
			}else{
				$base=mysql_select_db('todopeliculas',$conexion);
				if(!$base){
					echo 'no se encontro la base de datos: '.mysql_error();
				}else{
					$sql="SELECT peliculas.idPeliculas, peliculas.Titulo, peliculas.Puntaje, peliculas.Clasificacion, peliculas.Ano, peliculas.Duracion, paises.Pais, generos.NombreG, director.NombreD FROM director inner join peliculadirector on director.idDirector=peliculadirector.idDirector inner join peliculas on peliculas.idPeliculas=peliculadirector.idPeliculas inner join paises on peliculas.Codigo=paises.Codigo inner join generos on peliculas.idGenero=generos.idGenero  order by Titulo";
					
					$ejecuta=mysql_query($sql);
					if(!$ejecuta){
						echo 'hay un error en la sentencia sql: '.$sql;
					}else{
					$peliculas=mysql_fetch_array($ejecuta);	
					}
				}
			}


?>