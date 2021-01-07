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
      $sql = "SELECT  * from login where usuario='$usuario' and tipodeusuario='Administrador'";
      $result=mysqli_query($conexion,$sql);
?>
<body>
	<form action="php/cerrarsesion.php" method="POST">
		<nav class="navbar navbar-light bg-light navbar-toggleable-sm">
       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <a class="navbar-brand" href="ModuloAdministrativo.php">
           <img src="img/inmoviliapp22.png" class="d-inline-block align-top" alt="Logo boostrap"  style="width: 300px">
        </a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
        <div class="navbar-nav ">
            <b><a type="button" class="nav-item nav-link active btn-outline-secondary" style="margin:5px;" href="ModuloAdministrativo.php">Modulo Administrativo</a></b>
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
     
    </form >
    </nav>
     	<nav aria-label="breadcrumb" class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Modulo Administrativo</li>
        </ol>
         <div class="container-fluid table-bordered">
            <H5><br>
              <b>
                Perfil del Asesor: <?php echo $dato['Nombre']; ?>.
                 <br>
              </b>
              <br>
            </H5>
          </div>
           <form class="form-inline my-2 my-lg-0">
          <div>
            <br>
          <table class=" table table-bordered table-responsive">
            <thead>
              <tr>
                  <th scope="col" >ID</th>
                  <th scope="col" >Nombre</th>
                  <th scope="col" >Apellido</th>
                  <th scope="col" >Correo</th>
                  <th scope="col" >Direccion</th>
                  <th scope="col" >Telefono</th>
                  <th scope="col" >Cedula</th>
                  <th scope="col" >Tipo de usuario</th>
              </tr>
              <tbody>
                <tr>
                    <th scope="row"><?php echo $dato['idusuario']; ?></th>
                    <td><?php echo $dato['Nombre']; ?></td>
                    <td><?php echo $dato['Apellido']; ?></td>
                    <td><?php echo $dato['correo']; ?></td>
                    <td><?php echo $dato['direccion'];?></td>
                    <td><?php echo $dato['Telefono'];?></td>
                    <td><?php echo $dato['cedula']; ?></td>
                    <td><?php echo $dato['tipodeusuario'];} ?></td>
                </tr>
              </tbody>
            </thead>
          </table>
          </div>
          </form>
      </nav>
      <div class="container-fluid"> 
        <hr> 
        <div class="row"> 
          <div class="col">
          <h4>Agregar Registros</h4>
            <a type="button" class="btn btn-danger" href="RegistrarVentas.php">Registrar Venta</a>
            <a type="button" class="btn btn-danger" href="RegistrarArriendo.php">Registrar Arriendo</a>
          </div>
           <div class="col">
             <h4>Registros realizados</h4>
              <a href="Ventasrealizadas.php" type="button" class="btn btn-danger">Registro de Ventas</a>
              <a href="Arriendorealizados.php" type="button" class="btn btn-danger">Registro de Arriendos</a>
          </div>
          <div class="col">
             <h4>Contabilidad</h4>
            <a href="ContaVenta.php" type="button" class="btn btn-danger">Contabilidad Ventas</a>
            <a href="ContaArriendo.php" type="button" class="btn btn-danger">Contabilidad Arriendo</a>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col">
             <h4>Nuevo Usuarios / Usuarios registrado</h4>
             <a href="registro.php" type="button" class="btn btn-primary">Agregar Usuarios</a>
             <a href="mostrarusuarios.php" type="button" class="btn btn-primary">Mostrar Usuarios</a>
          </div>
        </div>
         <hr>
      </div>
<?php  }else{
	 header("Location: php/Validar.php");
} ?>
<script type="text/javascript" src="usuario.js"></script>
</body>
</html>