<?php 
	
	require_once "conexion.php";

	$usuario=$_POST['usuario'];
	$contraseña=$_POST['contraseña'];
	$correo=$_POST['correo'];
	$direccion=$_POST['direccion'];

	$sql="INSERT into login (usuario,contraseña,correo,direccion) VALUES ('$usuario','$contraseña','$correo','$direccion')";
	echo $result=mysqli_query($conexion,$sql);

 ?>