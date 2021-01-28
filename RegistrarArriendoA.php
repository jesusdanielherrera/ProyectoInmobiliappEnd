<!DOCTYPE html>
<html>
<head>
	<?php
		require_once "scripts.php";
	 ?>
	<title>InmobiliApp</title>
</head>
<?php 
    session_start();
    require_once "php/conexion.php";

     if(isset($_SESSION['user'])){ 
      
      $usuario = $_SESSION['user'];
      $sql = "SELECT * from login where usuario='$usuario'";
      $result=mysqli_query($conexion,$sql);
?>
<body>
	<form action="php/cerrarsesion.php" method="POST">
		<nav class="navbar navbar-light bg-light navbar-toggleable-sm">
       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <a class="navbar-brand" href="ModuloAsesor.php">
           <img src="img/inmoviliapp22.png" class="d-inline-block align-top" alt="Logo boostrap"  style="width: 300px">
        </a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
        <div class="navbar-nav ">
            <b><a type="button" class="nav-item nav-link active btn-outline-secondary" style="margin:5px;" href="ModuloAsesor.php">Modulo Administrativo</a></b>
        </div>
      </div>
       <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown ">
        <a type="button" style="background-color: gray;" class="btn btn-outline-secondary dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <img src="img/ico3-blanco.png" style="background-color: gray; ">
           <?php       
            while ($dato=mysqli_fetch_array($result)) {
            ?><b>
            <?php  echo $dato['Nombre'];
             ?>
           </b>
        </a>
        <div class="dropdown-menu" style="position: absolute; top:50px;" aria-labelledby="navbarDropdown">
          <a type="button" class="dropdown-item" href="php/cerrarsesion.php">Cerrar Sesion</a>
          </a>
      </li>
      </ul>
    </nav>
  </form >
    <form id="frmregistro">
      <nav aria-label="breadcrumb" class="container-fluid">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"aria-current="page"><a href="ModuloAsesor.php">Modulo Administrativo</a></li>
            <li class="breadcrumb-item active" aria-current="page">Registrar Arriendo</li>
      </nav>
          <div class="container table-bordered">
            <br>
            <H3>
              <b>
                Registrar Arriendo.
              </b>
              <br>
            </H3>
            <br>
                <div class="container-fluid table table-bordered">
                  <div class="col-sm-auto col-md-auto col-xl-auto">
                    <br>
                    <h4>DETALLES BASICOS: </h4>
                    </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                      Id Asesor o Administrador: <br>
                      <input type="text" class="form-control" id="idarriendoa" value="<?php echo $dato['idusuario'];}?>">
                    </div>
                 
                    <div class="col-sm-auto col-md-auto col-xl-auto"style="margin: 10px;">
                      Estado: <br>
                       <input type="text" class="form-control" id="tipolistado" value="No Pago">
                    </div>

                    <div class="col-sm-auto col-md-auto col-xl-auto"style="margin: 10px;">
                      Precio de Arriendo:   <br>
                       <input type="text" class="form-control" id="precioarriendo" placeholder="Cod $450000000">
                    </div>
           
                    <div class="col-sm-auto col-md-auto col-xl-auto"style="margin: 10px;">
                      Vistas de Arriendo:   <br>
                       <input type="text" class="form-control" id="vistaarriendo" placeholder="Calle">
                    </div>
          
                    <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                      Dormitorios:<br>
                       <input type="text" class="form-control" id="dormitorios" placeholder="4">
                    </div>
                    
                    <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                      Antiguedad: <br>
                       <input type="text"  class="form-control" id="antiguedad" placeholder="10 años">
                    </div>

                    <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                      Terrenos :   <br>
                       <input type="text" class="form-control" id="terrenos" placeholder="280 m2">
                    </div>
                    <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                      Tipo de Propiedad: <br>
                      <select class="form-control" type="text" id="tipoPropiedad">
                              <option>---</option>
                              <option>Casa</option>
                              <option>Apartamento</option>
                              <option>Local</option>
                              <option>Finca</option>
                            </select>
                    </div>
                  </div>
                <br>
            </div>
            
            <div class="container-fluid table table-bordered">
              <br>
                    <h4>TIPOS DE CARACTERISTICAS</h4><hr>
                      <div class="row">
                        <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                           <h6>Agregar Caracteristicas</h6>
                            <select class="form-control" id="caracteristica1">
                              <option>---</option>
                              <option>JARDIN</option>
                              <option>VISTA</option>
                              <option>BALCON</option>
                              <option>SEGURIDAD</option>
                              <option>PATIO</option>
                              <option>PAQUEADERO</option>
                            </select>
                        </div>
                         <div class="col-sm-auto col-md-auto col-xl-auto" style="margin:10px;">
                           <h6>Agregar Caracteristica
                           </h6>
                            <select class="form-control" id="caracteristica2">
                              <option>---</option>
                              <option>JARDIN</option>
                              <option>VISTA</option>
                              <option>BALCON</option>
                              <option>SEGURIDAD</option>
                              <option>PATIO</option>
                              <option>PAQUEADERO</option>
                            </select>
                         </div>
                         <div class="col-sm-auto col-md-auto col-xl-auto" style="margin:10px;">
                           <h6>Agregar Caracteristica
                           </h6>
                            <select class="form-control" id="caracteristica3">
                              <option>---</option>
                              <option>JARDIN</option>
                              <option>VISTA</option>
                              <option>BALCON</option>
                              <option>SEGURIDAD</option>
                              <option>PATIO</option>
                              <option>PAQUEADERO</option>
                            </select>
                         </div>
                         <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                           <h6>Agregar Caracteristica
                           </h6>
                            <select class="form-control" id="caracteristica4">
                              <option>---</option>
                              <option>JARDIN</option>
                              <option>VISTA</option>
                              <option>BALCON</option>
                              <option>SEGURIDAD</option>
                              <option>PATIO</option>
                              <option>PAQUEADERO</option>
                            </select>
                         </div>
                          <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                           <h6>Agregar Caracteristica
                           </h6>
                            <select class="form-control" id="caracteristica5">
                              <option>---</option>
                              <option>JARDIN</option>
                              <option>VISTA</option>
                              <option>BALCON</option>
                              <option>SEGURIDAD</option>
                              <option>PATIO</option>
                              <option>PAQUEADERO</option>
                            </select>
                         </div>
                      </div>
            </div>
            <div class="container-fluid table table-bordered">
                  <BR>
                   <h4>UBICACION</h4><hr>
                  <div class="row">
                    <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                      CIUDAD: <br>
                      <input type="text"  class="form-control" id="ciudad" placeholder="Baq">
                    </div>
                    <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                      DIRECCION: <br>
                      <input type="text" class="form-control" id="direccion" placeholder="direccion">
                    </div>
                    <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                      PISO #: <br>
                       <input type="text" class="form-control" id="piso" placeholder="0">
                    </div>
                  
                     <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                      LONGITUD: <br>
                      <input type="text" class="form-control" id="longitud" placeholder="E0*0*0">
                    </div>
                    
                    <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                      LATITUD:  <br>
                       <input type="text" class="form-control" id="latitud" placeholder="N0*0*0">
                    </div>
                  </div>
                
            </div>
            
            <div class="container-fluid table table-bordered">
              <br>
              <h4>CERCANIAS</h4><hr>
                <div class="row">
                    <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                          <H6>Agregar lugar cercano al domicilio</H6>
                            <select class="form-control" id="cercania1">
                            <option>---</option>
                            <option>CENTRO COMERCIAL</option>
                            <option>HOSPITAL</option>
                            <option>POLICIA</option>
                            <option>CINE</option>
                            <option>PARQUE</option>
                            <option>COLEGIO</option>
                          </select>  
                    </div>
                    <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                          <H6>Agregar lugar cercano al domicilio</H6>
                            <select class="form-control" id="cercania2">
                            <option>---</option>
                            <option>CENTRO COMERCIAL</option>
                            <option>HOSPITAL</option>
                            <option>POLICIA</option>
                            <option>CINE</option>
                            <option>PARQUE</option>
                            <option>COLEGIO</option>
                          </select>    
                    </div>
                    <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                          <H6>Agregar lugar cercano al domicilio</H6>
                            <select class="form-control" id="cercania3">
                            <option>---</option>
                            <option>CENTRO COMERCIAL</option>
                            <option>HOSPITAL</option>
                            <option>POLICIA</option>
                            <option>CINE</option>
                            <option>PARQUE</option>
                            <option>COLEGIO</option>
                          </select>      
                    </div>
                    <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                          <H6>Agregar lugar cercano al domicilio</H6>
                            <select class="form-control" id="cercania4">
                            <option>---</option>
                            <option>CENTRO COMERCIAL</option>
                            <option>HOSPITAL</option>
                            <option>POLICIA</option>
                            <option>CINE</option>
                            <option>PARQUE</option>
                            <option>COLEGIO</option>
                          </select>      
                    </div>
                    <div class="col-sm-auto col-md-auto col-xl-auto" style="margin: 10px;">
                          <H6>Agregar lugar cercano al domicilio</H6>
                            <select class="form-control" id="cercania5">
                            <option>---</option>
                            <option>CENTRO COMERCIAL</option>
                            <option>HOSPITAL</option>
                            <option>POLICIA</option>
                            <option>CINE</option>
                            <option>PARQUE</option>
                            <option>COLEGIO</option>
                          </select>     
                    </div>
                </div>
            </div>
          </ol>
         <span type="submit" class="btn btn-primary btn-block" id="registrararriendo">Registrar arriendo</span>
         <br>
      </nav>
    </form>
    <?php } else{
   header("Location: php/Validar.php");
} ?>
</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('#registrararriendo').click(function(){

      if($('#idarriendoa').val()==""){
        alertify.alert("Debes agregar tipo de propiedad");
        return false;
      }else if($('#tipoarriendo').val()==""){
        alertify.alert("Debes agregar tipo de propiedad");
        return false;
      }else if ($('#tipolistado').val()==""){
        alertify.alert("Debes agregar el tipo de listado");
        return false;
      }else if ($('#precioarriendo').val()==""){
        alertify.alert("Debes agregar un precio a la propiedad");
        return false;
      }else if ($('#vistaarriendo').val()==""){
        alertify.alert("Debes agregar Vista de propiedad");
        return false;
      }else if ($('#dormitorios').val()==""){
        alertify.alert("Debes agregar el numero de dormitorios");
        return false;
      }else if ($('#antiguedad').val()==""){
        alertify.alert("Debes agregar antiguedad de la propiedad");
        return false;
      }else if ($('#terrenos').val()==""){
        alertify.alert("Debes agregar el terreno");
        return false;
      }else if ($('#ciudad').val()==""){
        alertify.alert("Debes agregar la ciudad");
        return false;
      }else if ($('#piso').val()==""){
        alertify.alert("Debes agregar los pisos");
        return false;
      }else if ($('#longitud').val()==""){
        alertify.alert("Debes agregar una longitud");
        return false;
      }else if ($('#latitud').val()==""){
        alertify.alert("Debes agregar una latitud");
        return false;
      }else if ($('#direccion').val()==""){
        alertify.alert("Debes agregar una Direccion");
        return false;
      }

      cadena ="idarriendoa="+ $('#idarriendoa').val()
              +"&tipoarriendo="+ $('#tipoarriendo').val()
              +"&tipolistado="+ $('#tipolistado').val()
              +"&precioarriendo="+ $('#precioarriendo').val() 
              +"&vistaarriendo="+ $('#vistaarriendo').val() 
              +"&dormitorios="+ $('#dormitorios').val() 
              +"&antiguedad="+ $('#antiguedad').val() 
              +"&terrenos="+ $('#terrenos').val() 
              +"&ciudad="+ $('#ciudad').val() 
              +"&piso="+ $('#piso').val()
              +"&longitud="+ $('#longitud').val()
              +"&latitud="+ $('#latitud').val()
              +"&caracteristica1="+ $('#caracteristica1').val() 
              +"&caracteristica2="+ $('#caracteristica2').val()        
              +"&caracteristica3="+ $('#caracteristica3').val()
              +"&caracteristica4="+ $('#caracteristica4').val()
              +"&caracteristica5="+ $('#caracteristica5').val()
              +"&cercania1="+ $('#cercania1').val()
              +"&cercania2="+ $('#cercania2').val()
              +"&cercania3="+ $('#cercania3').val()
              +"&cercania4="+ $('#cercania4').val()
              +"&cercania5="+ $('#cercania5').val()
              +"&direccion="+ $('#direccion').val();

              $.ajax({
                  type:"POST",
                  url:"php/Registrararriendo.php",
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