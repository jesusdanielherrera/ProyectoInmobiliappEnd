<?php 
	require "conexion.php";
	$idusuario=$_POST['idusuario'];

	$sql="DELETE from login where idusuario='$idusuario'";
	echo $result=mysqli_query($conexion,$sql);
 ?>