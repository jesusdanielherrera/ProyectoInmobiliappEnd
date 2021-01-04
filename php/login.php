<?php

	session_start();
	require_once "conexion.php";

	$usuario=$_POST['usuario'];
	$contraseña=sha1($_POST['contraseña']);


	$sql="SELECT * FROM login where usuario='$usuario' and contraseña= '$contraseña'";
	$result=mysqli_query($conexion,$sql);

	if(mysqli_num_rows($result) > 0){
		$_SESSION['user']=$usuario;
		echo 1;
	}else{
		echo 0;
	}


  ?>

