<?php 
	function conexion(){
		$servidor="localhost";
		$usuario="root";
		$bd="todopeliculas";
		$password="18968817";

		$conexion=mysqli_connect($servidor,$usuario,$password,$bd);
		return $conexion;
	}
	


 ?>