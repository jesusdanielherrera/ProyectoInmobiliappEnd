<?php 
	require "conexion.php";
	$iddelestadoA=$_POST['iddelestadoA'];

	$sql="DELETE from registroarriendo where iddelestadoA='$iddelestadoA'";
	echo $result=mysqli_query($conexion,$sql);
 ?>