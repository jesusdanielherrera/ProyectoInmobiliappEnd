<?php 
	
	require_once "conexion.php";

	$usuario=$_POST['usuario'];
	$contraseña=sha1($_POST['contraseña']);
	$correo=$_POST['correo'];
	$direccion=$_POST['direccion'];
	$tipodeusuario=$_POST['tipodeusuario'];
	$Nombre=$_POST['Nombre'];
	$Apellido=$_POST['Apellido'];
	$Telefono=$_POST['Telefono'];
	$cedula=$_POST['cedula'];

	$sql="INSERT into login (usuario,contraseña,correo,direccion,tipodeusuario,Nombre,Apellido,Telefono,cedula) VALUES ('$usuario','$contraseña','$correo','$direccion','$tipodeusuario','$Nombre','$Apellido','$Telefono','$cedula')";
	echo $result=mysqli_query($conexion,$sql);

 ?>