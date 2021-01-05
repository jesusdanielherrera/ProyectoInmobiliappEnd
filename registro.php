<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "scripts.php"; ?>
</head>
<?php  session_start();
    require_once "php/conexion.php";

     if(isset($_SESSION['user'])){ 
      
      $usuario = $_SESSION['user'];
      $sql = "SELECT  * from login where usuario='$usuario' and tipodeusuario='Administrador'";
      $result=mysqli_query($conexion,$sql); ?>
<body>
<div class="container">
    <form id="frmregistro">
      <div class="form-group">
        <label><b>Usuario</b></label>
          <input class="form-control" type="text" id="usuario" name="" placeholder="Registre el Usuario" >
      </div>
      <div class="form-group">
        <label><b>Contraseña</b></label>
        <input class="form-control" type="password" id="contraseña" name="" placeholder="Colocar como predeterminado la cedula del usuario que va registrar" >
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
            <option>Administrador</option>
          </select>
        </div>
      <div class="form-group">
        <label><b>Nombre</b></label>
        <input class="form-control" type="text" id="Nombre" name="" placeholder="Registre su Nombre">
      </div>
      <div class="form-group">
        <label><b>Apellido</b></label>
        <input class="form-control" type="text" id="Apellido" name="" placeholder="Registre su Apellido">
      </div>
      <div class="form-group">
        <label><b>Telefono</b></label>
        <input class="form-control" type="text" id="Telefono" name="" placeholder="Registre su Telefono">
      </div>
      <div class="form-group">
        <label><b>Cedula</b></label>
        <input class="form-control" type="text" id="cedula" name="" placeholder="Registre su Cedula">
      </div>

      <p></p>
      
      <span type="submit" class="btn btn-primary btn-block" id="registrarnuevo">Registrar Usuario</span> 
      <a href="ModuloAdministrativo.php">¿No quieres Registrar un Usuario?</a>
	   </div>
   </form>
</div>
</body>
</html>
<?php  }else{
   header("Location: php/Validar.php");
} ?>

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
      }else if ($('#tipodeusuario').val()==""){
        alertify.alert("Debes agregar tipo de usuario");
        return false;
      }else if ($('#Nombre').val()==""){
        alertify.alert("Debes agregar Nombre");
        return false;
      }else if ($('#Apellido').val()==""){
        alertify.alert("Debes agregar Apellido");
        return false;
      }else if ($('#Telefono').val()==""){
        alertify.alert("Debes agregar Telefono");
        return false;
      }else if ($('#cedula').val()==""){
        alertify.alert("Debes agregar la cedula");
        return false;
      }






      cadena = "usuario="+ $('#usuario').val()
              +"&contraseña=" + $('#contraseña').val()
              +"&correo="+ $('#correo').val()
              +"&direccion="+ $('#direccion').val()
              +"&tipodeusuario="+ $('#tipodeusuario').val()
              +"&Nombre="+ $('#Nombre').val()
              +"&Apellido="+ $('#Apellido').val()
              +"&Telefono="+ $('#Telefono').val()
              +"&cedula="+ $('#cedula').val();

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