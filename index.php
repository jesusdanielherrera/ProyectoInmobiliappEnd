<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php

		require_once "scripts.php";

	 ?>
</head>
<?php 
    
    session_start();
    require_once "php/conexion.php";

    if(isset($_SESSION['user'])){ 
      
    header("Location: php/Validar.php");
?>

<?php }else{ ?>
   <body style="margin:0;padding: 0;background: url(img/bg.jpg) no-repeat center top;background-size: cover;font-family: sans-serif;height: 100vh;">

  <div class="container-fluid" style="border-radius: 5px; width: 320px;background: #fff;color: #000;top: 50%;left:50%;position: absolute;transform: translate(-50%, -50%);box-sizing: border-box;padding:
   70px 30px;">

   <img  src="img/inmoviliapp2.png" alt="" style="width: 100%;height: 100px;position: absolute;border-radius: 5px  ; top: 0px;left: 0px">

    <br><br>
      <div class="form-group">
        <label><b>usuario</b></label>
        <input class="form-control" type="text" id="usuario" placeholder="Ingrese el usuario" >
       </div>
      <div class="form-group">
        <label><b>Contraseña</b></label>
        <input class="form-control" id="contraseña"type="password" placeholder="Ingrese la contraseña">
      </div>
      <p></p>
      <span class="btn btn-primary btn-block" id="entrar">Ingresar</span> 

  </div>

</body>
</html>
<?php } ?>
<script type="text/javascript">
  $(document).ready(function(){
    $('#entrar').click(function(){
      if($('#usuario').val()==""){
        alertify.alert("Debes agregar el usuario");
        return false;
      }else if ($('#contraseña').val()==""){
      alertify.alert("Debes agregar la contraseña");
      return false;
      }
      cadena="usuario=" + $('#usuario').val()+
              "&contraseña="+$('#contraseña').val();
              $.ajax({
                type:"POST",
                url:"php/login.php",
                data:cadena,
                success:function(r){
                  if(r==1){
                    window.location="php/Validar.php";
                  }else{
                    alertify.alert("Fallo al entrar :(");
                  }
                }
              });
    });
  });
</script>