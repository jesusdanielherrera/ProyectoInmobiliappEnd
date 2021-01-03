<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "scripts.php"; ?>
</head>
<body>
<div class="container">
    <form id="frmregistro">
      <div class="form-group">
        <label><b>Usuario</b></label>
          <input class="form-control" type="text" id="usuario" name="" placeholder="Registre el Usuario" >
      </div>
      <div class="form-group">
        <label><b>Contraseña</b></label>
        <input class="form-control" type="password" id="contraseña" name="" placeholder="Registre la Contraseña" >
      </div>
      <div class="form-group">
        <label><b>Correo</b></label>
        <input class="form-control" type="text" id="correo" name="" placeholder="Registre su Correo" >
      </div>
      <div class="form-group">
        <label><b>Direccion</b></label>
        <input class="form-control" type="text" id="direccion" name="" placeholder="Registre su Direccion">
      </div>
       <div class="form-group">
          <h6>Tipos De usuario</h6>
          <select class="form-control" id="tipodeusuario">
            <option>Asesor</option>
            <option>Adminisitrador</option>
          </select>
        </div>
      <div class="form-group">
        <label><b>Nombre</b></label>
        <input class="form-control" type="text" id="Nombre" name="" placeholder="Registre su Direccion">
      </div>
      <div class="form-group">
        <label><b>Apellido</b></label>
        <input class="form-control" type="text" id="Apellido" name="" placeholder="Registre su Direccion">
      </div>
      <div class="form-group">
        <label><b>Telefono</b></label>
        <input class="form-control" type="text" id="Telefono" name="" placeholder="Registre su Direccion">
      </div>
      <div class="form-group">
        <label><b>Cedula</b></label>
        <input class="form-control" type="text" id="cedula" name="" placeholder="Registre su Direccion">
      </div>

      <p></p>
      
      <span type="submit" class="btn btn-primary btn-block" id="registrarnuevo">Registrar</span> 
	   </div>
   </form>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarnuevo').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
        return false;
			}else if ($('#contraseña').val()==""){
        alertify.alert("Debes agregar la contraseña");
        return false;
      }else if ($('#correo').val()==""){
        alertify.alert("Debes agregar el correo");
        return false;
      }else if ($('#direccion').val()==""){
        alertify.alert("Debes agregar la direccion");
        return false;
      }

      cadena = "usuario="+ $('#usuario').val()
              +"&contraseña=" + $('#contraseña').val()
              +"&correo="+ $('#correo').val()
              +"&direccion="+ $('#direccion').val();

              $.ajax({
                  type:"POST",
                  url:"php/registratU.php",
                  data:cadena,
                  success:function(r){
                    if(r==1){
                      $('#frmregistro')[0].reset();
                       alertify.success("Agregado con exito");
                    }else{
                      alertify.error("Fallo al registrar");
                    }
                  }
              })
		})
	})
</script>