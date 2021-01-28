<?php 
	require "conexion.php";
	
	$iddelestadoP=$_POST['iddelestadoP'];
	$idarriendov=$_POST['idarriendov'];
	$tipoPropiedad=$_POST['tipoPropiedad'];
	$preciopropiedad=$_POST['preciopropiedad'];
	$vistapropiedad=$_POST['vistapropiedad'];
	$dormitorios=$_POST['dormitorios'];
	$antiguedad=$_POST['antiguedad'];
	$terrenos=$_POST['terrenos'];
	$ciudad=$_POST['ciudad'];
	$piso=$_POST['piso'];

	$sql = "UPDATE registroventa SET iddelestadoP='$iddelestadoP',
										idarriendov='$idarriendov', 
										tipoPropiedad='$tipoPropiedad',  
										preciopropiedad='$preciopropiedad', 
										vistapropiedad='$vistapropiedad', 
										dormitorios='$dormitorios',
										antiguedad='$antiguedad', 
										terrenos='$terrenos', 
										ciudad='$ciudad', 
										piso='$piso'
										where iddelestadoP = '$iddelestadoP'";

	echo $result=mysqli_query($conexion, $sql);
?>