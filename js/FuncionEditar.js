function agregaform(datos){

	d=datos.split('||');

	$('#iddelestadoA').val(d[0]);
	$('#idarriendoa').val(d[1]);
	$('#tipoarriendo').val(d[2]);
	$('#tipolistado').val(d[3]);
	$('#precioarriendo').val(d[4]);
	$('#vistaarriendo').val(d[5]);
	$('#dormitorios').val(d[6]);
	$('#antiguedad').val(d[7]);
	$('#terrenos').val(d[8]);
	$('#ciudad').val(d[9]);
	$('#piso').val(d[10]);
}

function actualizaDatos() {

	iddelestadoA=$('#iddelestadoA').val();
	idarriendoa=$('#idarriendoa').val();
	tipoarriendo=$('#tipoarriendo').val();
	tipolistado=$('#tipolistado').val();
	precioarriendo=$('#precioarriendo').val();
	vistaarriendo=$('#vistaarriendo').val();
	dormitorios=$('#dormitorios').val();
	antiguedad=$('#antiguedad').val();
	terrenos=$('#terrenos').val();
	ciudad=$('#ciudad').val();
	piso=$('#piso').val();

	cadena="idarriendoa="+idarriendoa+
		   "&iddelestadoA="+iddelestadoA+
		   "&tipoarriendo="+tipoarriendo+
		   "&tipolistado="+tipolistado+
		   "&precioarriendo="+precioarriendo+
		   "&vistaarriendo="+vistaarriendo+
		   "&dormitorios="+dormitorios+
		   "&antiguedad="+antiguedad+
		   "&terrenos="+terrenos+
		   "&ciudad="+ciudad+
		   "&piso="+piso;

		    $.ajax({
                  type:"POST",
                  url:"php/ActualizarArriendo.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                       alertify.success("Actualizado con exito");
                    }else{
                      alertify.error("Fallo al registrar");
                    }
                  }
              })
}

function agregaforma(datosv){

	d=datosv.split('||');

	$('#iddelestadoP').val(d[0]);
	$('#idarriendov').val(d[1]);
	$('#tipoPropiedad').val(d[2]);
	$('#tipolistado').val(d[3]);
	$('#preciopropiedad').val(d[4]);
	$('#vistapropiedad').val(d[5]);
	$('#dormitorios').val(d[6]);
	$('#antiguedad').val(d[7]);
	$('#terrenos').val(d[8]);
	$('#ciudad').val(d[9]);
	$('#piso').val(d[10]);
}

function actualizaDatosv() {

	iddelestadoP=$('#iddelestadoP').val();
	idarriendov=$('#idarriendov').val();
	tipoPropiedad=$('#tipoPropiedad').val();
	tipolistado=$('#tipolistado').val();
	preciopropiedad=$('#preciopropiedad').val();
	vistapropiedad=$('#vistapropiedad').val();
	dormitorios=$('#dormitorios').val();
	antiguedad=$('#antiguedad').val();
	terrenos=$('#terrenos').val();
	ciudad=$('#ciudad').val();
	piso=$('#piso').val();

	cadena="iddelestadoP="+iddelestadoP+
		   "&idarriendov="+idarriendov+
		   "&tipoPropiedad="+tipoPropiedad+
		   "&tipolistado="+tipolistado+
		   "&preciopropiedad="+preciopropiedad+
		   "&vistapropiedad="+vistapropiedad+
		   "&dormitorios="+dormitorios+
		   "&antiguedad="+antiguedad+
		   "&terrenos="+terrenos+
		   "&ciudad="+ciudad+
		   "&piso="+piso;

		    $.ajax({
                  type:"POST",
                  url:"php/ActualizarArriendov.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                       alertify.success("Actualizado con exito");
                    }else{
                      alertify.error("Fallo al registrar");
                    }
                  }
              })
}
//EDITAR EL USUARIO REGISTRADO...//

function actualizarusuarios(datosu){

	d=datosu.split('||');

	$('#idusuario').val(d[0]);
	$('#usuario').val(d[1]);
	$('#correo').val(d[3]);
	$('#direccion').val(d[4]);
	$('#tipodeusuario').val(d[5]);
	$('#Nombre').val(d[6]);
	$('#Apellido').val(d[7]);
	$('#Telefono').val(d[8]);
	$('#cedula').val(d[9]);
}

function actualizaDatosu() {

	idusuario=$('#idusuario').val();
	usuario=$('#usuario').val();
	correo=$('#correo').val();
	direccion=$('#direccion').val();
	tipodeusuario=$('#tipodeusuario').val();
	Nombre=$('#Nombre').val();
	Apellido=$('#Apellido').val();
	Telefono=$('#Telefono').val();
	cedula=$('#cedula').val();


	cadena="idusuario="+idusuario+
		   "&usuario="+usuario+
		   "&correo="+correo+
		   "&direccion="+direccion+
		   "&tipodeusuario="+tipodeusuario+
		   "&Nombre="+Nombre+
		   "&Apellido="+Apellido+
		   "&Telefono="+Telefono+
		   "&cedula="+cedula;

		    $.ajax({
                  type:"POST",
                  url:"php/ActualizarUsuarios.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                       alertify.success("Actualizado con exito");
                    }else{
                      alertify.error("Fallo al registrar");
                    }
                  }
              })
}


function preguntarSiNo(iddelestadoA){
	alertify.confirm('Eliminar Datos', '¿Estar seguro de Eliminar este dato?'
				, function(){ eliminardatos(iddelestadoA) }
                , function(){ alertify.error('Cancel')});
}

function eliminardatos(iddelestadoA){
	cadena="iddelestadoA="+iddelestadoA;

	$.ajax({
                  type:"POST",
                  url:"php/eliminardato.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                       alertify.success("Eliminado con exito");
                    }else{
                      alertify.error("Fallo al registrar");
                    }
                  }
              })
}
function preguntarSiNoP(iddelestadoP){
	alertify.confirm('Eliminar Datos', '¿Estar seguro de Eliminar este dato?'
				, function(){ eliminardatoP(iddelestadoP) }
                , function(){ alertify.error('Cancel')});
}

function eliminardatoP(iddelestadoP){
	cadena="iddelestadoP="+iddelestadoP;

	$.ajax({
                  type:"POST",
                  url:"php/eliminardatoP.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                       alertify.success("Eliminado con exito");
                    }else{
                      alertify.error("Fallo al registrar");
                    }
                  }
              })
}

function preguntarSiNoU(idusuario){
	alertify.confirm('Eliminar Datos', '¿Estar seguro de Eliminar este dato?'
				, function() { eliminardato(idusuario )}
                , function(){ alertify.error('Cancel')});
}

function eliminardato(idusuario){
	cadena="idusuario="+idusuario;

	$.ajax({
                  type:"POST",
                  url:"php/eliminardatou.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                       alertify.success("Eliminado con exito");
                    }else{
                      alertify.error("Fallo al registrar");
                    }
                  }
              })
}