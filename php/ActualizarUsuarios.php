<?php 
require "conexion.php";
	
	$idusuario=$_POST['idusuario'];
	$usuario=$_POST['usuario'];
	$correo=$_POST['correo'];
	$direccion=$_POST['direccion'];
	$tipodeusuario=$_POST['tipodeusuario'];
	$Nombre=$_POST['Nombre'];
	$Apellido=$_POST['Apellido'];
	$Telefono=$_POST['Telefono'];
	$cedula=$_POST['cedula'];

	$sql = "UPDATE login SET idusuario='$idusuario',
										usuario='$usuario', 
										correo='$correo', 
										direccion='$direccion', 
										tipodeusuario='$tipodeusuario', 
										Nombre='$Nombre', 
										Apellido='$Apellido',
										Telefono='$Telefono', 
										cedula='$cedula'
										where idusuario = '$idusuario'";

	echo $result=mysqli_query($conexion, $sql);
	 ?>