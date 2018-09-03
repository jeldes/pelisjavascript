
<?php

session_start();
	require("connect_db.php");

	$correo=$_POST['email'];
	$pass=$_POST['contrasena'];

if ($correo ==""){
	echo "<script>alert('Debe ingresar correo')</script>";
	echo "<script>location.href='/Pelis/index.php'</script>";
}else if ($pass=="") {
	echo "<script>alert('Debe ingresar Contraseña')</script>";
	echo "<script>location.href='/Pelis/index.php'</script>";		
}

	
	$sql=mysqli_query($mysqli,"SELECT * FROM usuario WHERE Correo='$correo'");

	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['Contrasena']){
			
			$_SESSION['email']=$f['Correo'];

			header("Location:/Pelis/paginas/intro.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='/Pelis/index.php'</script>";
		}
	}else{
	//	

	}

?>
