
<div class="container">	
	<header>
			<div class="container">
			  <center><img src="/Pelis/imagenes/logo.png" width="50%"></center>
			</div>
	
		<div>
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand">TodoPeliculas</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li><a href="http://localhost/Pelis/paginas/intro.php">Inicio</a></li>
			      <li><a href="http://localhost/Pelis/paginas/lista.php">Lista de Peliculas</a></li>
			      <li><a href="http://localhost/Pelis/paginas/buscart.php">Buscar</a></li>
			      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Ingresar<span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="http://localhost/Pelis/paginas/igenero.php">Genero</a></li>
			          <li><a href="http://localhost/Pelis/paginas/idirector.php">Director</a></li>
			          <li><a href="http://localhost/Pelis/paginas/ipeliculas.php">Pelicula</a></li>
			        </ul>
			      </li>
			      <?php
			      if ($_SESSION['email']=="n.jeldes@hotmail.com") {
			      	echo '<li><a href="http://localhost/Pelis/paginas/users.php">Usuarios</a></li>';
			        
			        } 
			      
			      ?>
			     </ul>
			      <ul class="nav pull-right navbar-nav">
			     	<li><a href="/Pelis/desconectar.php">Cerrar sesión</a></li>
			     	
			     </ul>	
			  </div>
			</nav>
		</div>
	
	