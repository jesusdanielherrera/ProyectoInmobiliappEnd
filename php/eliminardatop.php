<?php 
	require "conexion.php";
	$iddelestadoP=$_POST['iddelestadoP'];

	$sql="DELETE from registroventa where iddelestadoP='$iddelestadoP'";
	echo $result=mysqli_query($conexion,$sql);
 ?>