<?php 
	 session_start();
    require_once "conexion.php";

    if(isset($_SESSION['user'])){ 
    	$usuario=$_SESSION['user'];
		$sql="SELECT * FROM login where usuario='$usuario'";
		$result=mysqli_query($conexion,$sql);

		while ($dato=mysqli_fetch_array($result)) {
			if($dato['tipodeusuario']== 'Administrador'){
				header("Location: ../ModuloAdministrativo.php");
			}
			if($dato['tipodeusuario']== 'Asesor'){
				header("Location: ../ModuloAsesor.php");
			}else{
				echo "404 not found";
			}
		}
	}
?>