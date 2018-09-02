//guardar informacion para genero
$(function(){
	$("#ingg").click(function(){
		var url="registrargen.php";
		$.ajax({
			type:"POST",
			url:url,
			data:$("#formulario").serialize(),
			success:function(data){
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
				$("#resultado").html(data);
			}
		});
	return false;	
	});
});