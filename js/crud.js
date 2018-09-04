//guardar informacion para genero
$(function(){
	$("#ingg").click(function(){
		var url="registrargen.php";
		$.ajax({
			type:"POST",
			url:url,
			data:$("#formulario").serialize(),
			success:function(data){
				$("#formulario")[0].reset();
				$('#tabla').load("lista/listageneros.php");
				$("#resultado").html(data);
			}
		});
	return false;	
	});
});
//Guardar director
$(function(){
	$("#ingd").click(function(){
		var url="registrardir.php";
		$.ajax({
			type:"post",
			url:url,
			data:$("#formd").serialize(),
			success:function(data){
				$("#formd")[0].reset();
				$('#tabla').load("lista/listadirector.php");
				$("#resultado").html(data);
			}
		});
	return false;	
	});
});
//guardar Pelicula
$(function(){
	$("#ingp").click(function(){
		var url="registrarpeli.php";
		$.ajax({
			type:"post",
			url:url,
			data:$("#formp").serialize(),
			success:function(data){
				$("#formp")[0].reset();
				$('#tabla').load("lista/listapeliculas.php");
				$("#resultado").html(data);
			}
		});
	return false;	
	});
});	
//Guardar usuario
$(function(){
	$("#ingu").click(function(){
		var url="registraruser.php";
		$.ajax({
			type:"post",
			url:url,
			data:$("#formu").serialize(),
			success:function(data){
				$("#formu")[0].reset();
				$("#resultado").html(data);
			}
		});
	return false;	
	});
});	

//modificar usuario
$(function(){
	$("#modu").click(function(){
		var url="moduser.php";
		$.ajax({
			type:"post",
			url:url,
			data:$("#formm").serialize(),
			success:function(data){
				$("#resultado").html(data);
			}
		});
	return false;	
	});
});		