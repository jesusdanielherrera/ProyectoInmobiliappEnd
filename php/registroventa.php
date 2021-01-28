<?php 
	
	require_once "conexion.php";
	$idarriendov=$_POST['idarriendov'];
	$tipoPropiedad=$_POST['tipoPropiedad'];
	$tipolistado=$_POST['tipolistado'];
	$preciopropiedad=$_POST['preciopropiedad'];
	$vistapropiedad=$_POST['vistapropiedad'];
	$Dormitorios=$_POST['Dormitorios'];
	$antiguedad=$_POST['antiguedad'];
	$terrenos=$_POST['terrenos'];
	$ciudad=$_POST['ciudad'];
	$piso=$_POST['piso'];
	$longitud=$_POST['longitud'];
	$latitud=$_POST['latitud'];
	$caracteristica1=$_POST['caracteristica1'];
	$caracteristica2=$_POST['caracteristica2'];
	$caracteristica3=$_POST['caracteristica3'];
	$caracteristica4=$_POST['caracteristica4'];
	$caracteristica5=$_POST['caracteristica5'];
	$Cercania1=$_POST['Cercania1'];
    $Cercania2=$_POST['Cercania2'];
	$Cercania3=$_POST['Cercania3'];
	$Cercania4=$_POST['Cercania4'];
	$Cercania5=$_POST['Cercania5'];
	$direccion=$_POST['direccion'];


	$sql="INSERT into registroventa (idarriendov,tipoPropiedad,tipolistado,preciopropiedad,vistapropiedad,dormitorios,antiguedad, terrenos, ciudad, piso, longitud, latitud, caracteristica1,caracteristica2,caracteristica3,caracteristica4,caracteristica5,Cercania1,Cercania2,Cercania3,Cercania4,Cercania5,direccion)
		  VALUES ('$idarriendov','$tipoPropiedad','$tipolistado','$preciopropiedad','$vistapropiedad', '$Dormitorios','$antiguedad','$terrenos','$ciudad','$piso','$longitud','$latitud','$caracteristica1','$caracteristica2','$caracteristica3','$caracteristica4','$caracteristica5','$Cercania1','$Cercania2','$Cercania3','$Cercania4','$Cercania5','$direccion')";

	echo $result=mysqli_query($conexion,$sql);

 ?>