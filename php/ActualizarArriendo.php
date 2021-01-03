<?php 
	require "conexion.php";
	
	$iddelestadoA=$_POST['iddelestadoA'];
	$idarriendoa=$_POST['idarriendoa'];
	$tipoarriendo=$_POST['tipoarriendo'];
	$tipolistado=$_POST['tipolistado'];
	$precioarriendo=$_POST['precioarriendo'];
	$vistaarriendo=$_POST['vistaarriendo'];
	$dormitorios=$_POST['dormitorios'];
	$antiguedad=$_POST['antiguedad'];
	$terrenos=$_POST['terrenos'];
	$ciudad=$_POST['ciudad'];
	$piso=$_POST['piso'];

	$sql = "UPDATE registroarriendo SET iddelestadoA='$iddelestadoA',
										idarriendoa='$idarriendoa', 
										tipoarriendo='$tipoarriendo', 
										tipolistado='$tipolistado', 
										precioarriendo='$precioarriendo', 
										vistaarriendo='$vistaarriendo', 
										dormitorios='$dormitorios',
										antiguedad='$antiguedad', 
										terrenos='$terrenos', 
										ciudad='$ciudad', 
										piso='$piso'
										where iddelestadoA = '$iddelestadoA'";

	echo $result=mysqli_query($conexion, $sql);
?>