function validar(){
	var email, contrasena;
	email=document.getElementById('email').value;
	contrasena=document.getElementById("contrasena").value;

	if (email=="" || contrasena=="") {
		alert("Debe ingresar informacion");
		return false;
	}else if (email.length>200) {
		alert("Email muy largo");
		return false;
	}
}
function validagen() {
	var gen;
	gen=document.getElementById("gen").value;
	if(gen==""){
		alert("Debe ingresar informacion");
		return false;
	}
}
function validadir() {
	var direc;
	direc=document.getElementById("direc").value;
	if(direc==""){
		alert("Debe ingresar informacion");
		return false;
	}
}

function selim()
{
	var preg=confirm("¿Realmente desea eliminar este registro?")
	if (preg==false) {
		return false;
	}
}
//para el modal modificar
function agregardatos(datos){
	d=datos.split('||');
	$('#muser').val(d[1]);
	$('#mnom').val(d[2]);
	$('#map').val(d[3]);
	$('#mcon').val(d[4]);
	$('#mid').val(d[0]);
	
}
function eliminardatos(datos){
	d=datos.split('||');
	$('#elc').val(d[1]);
	$('#enom').val(d[2]);
	$('#eap').val(d[3]);
	$('#econ').val(d[4]);
	$('#eid').val(d[0]);
}

function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("titulo");
  filter = input.value.toUpperCase();
  table = document.getElementById("tabla");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[columna];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
$("#buscar").click(function(){
	radio=$("#opt").val();
	if (radio=='duracion') {
		columna=4;
	}else if (radio=='pais') {
		columna=5;
	}else if (radio=='ano') {
		columna=3;
	}else if (radio=='puntaje') {
		columna=1;
	}else if (radio=='genero') {
		columna=6;
	}else if (radio=='director') {
		columna=7;
	}else if (radio=='clasificacion') {
		columna=2;
	}else{
		columna=0;
	}


	console.log(radio);
	console.log(columna);
});



	