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
      $sql = "SELECT  * from login where usuario='$usuario' and tipodeusuario='Asesor'";
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
            <li class="breadcrumb-item active" aria-current="page">Contabilidad Arriendos</li>
      </nav>
      <div class="container">
        <table class="table table-bordered">
          <thead>
            <th colspan="6"><b><h5>VIVIENDAS EN ARRIENDOS</h5></b></th>
            <tr class="text-center">
              <th scope="cole"  class="text-center">ID</th>
              <th scope="cole"  class="text-center">ID USUARIO</th>
              <th scope="cole"  class="text-center">VALOR DE VENTA</th>
              <th scope="cole"  class="text-center">PORCENTAJE DE COMISION</th>
              <th scope="cole"  class="text-center">COMISION A PAGAR</th>
              <th scope="cole"  class="text-center">ESTADO</th>
            </tr>
          </thead>
           <tbody>
              <?php
               $datos = $dato['idusuario'];
             $sqls = "SELECT  idarriendoa, iddelestadoA, precioarriendo, tipolistado, (precioarriendo*0.10) as result from registroarriendo  where idarriendoa='$datos'";}
             $results=mysqli_query($conexion,$sqls);   
             $total=0;
             while ($datos=mysqli_fetch_array($results)) {
              $total = $total + $datos['result'];
            ?>
                  <tr>
                      <th scope="row" class="text-center"> <?php echo $datos['iddelestadoA'];?></th>
                      <td class="text-center"> <?php echo $datos['idarriendoa']; ?></td>
                      
                      <td class="text-center"> <?php echo $datos['precioarriendo']; ?></td>
                      <td class="text-center">10%</td>
                      <td class="text-center"><?php echo $datos['result'] ;?></td>
                      <td class="text-center"> <?php echo $datos['tipolistado '];}?></td>
                  </tr>
                  <th colspan="4" class="text-center"><b>TOTAL DE ARRIENDOS</b></th><td class="text-center"><?= $total ;?></td>
                </tbody>
        </table>
      </div>
  </form>
 <?php } else{
   header("Location: php/Validar.php");
} ?>
</body>
</html>