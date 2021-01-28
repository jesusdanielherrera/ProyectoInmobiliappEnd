<?php 
	
	require_once "conexion.php";
	
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
	$longitud=$_POST['longitud'];
	$latitud=$_POST['latitud'];
	$caracteristica1=$_POST['caracteristica1'];
	$caracteristica2=$_POST['caracteristica2'];
	$caracteristica3=$_POST['caracteristica3'];
	$caracteristica4=$_POST['caracteristica4'];
	$caracteristica5=$_POST['caracteristica5'];
	$cercania1=$_POST['cercania1'];
    $cercania2=$_POST['cercania2'];
	$cercania3=$_POST['cercania3'];
	$cercania4=$_POST['cercania4'];
	$cercania5=$_POST['cercania5'];
	$direccion=$_POST['direccion'];

	$sql="INSERT into registroarriendo (idarriendoa,tipoarriendo,tipolistado,precioarriendo,vistaarriendo,dormitorios,antiguedad, terrenos, ciudad, piso, longitud, latitud, caracteristica1,caracteristica2,caracteristica3,caracteristica4,caracteristica5,cercania1,cercania2,cercania3,cercania4,cercania5,direccion)
		  VALUES ('$idarriendoa','$tipoarriendo','$tipolistado','$precioarriendo','$vistaarriendo', '$dormitorios','$antiguedad','$terrenos','$ciudad','$piso','$longitud','$latitud','$caracteristica1','$caracteristica2','$caracteristica3','$caracteristica4','$caracteristica5','$cercania1','$cercania2','$cercania3','$cercania4','$cercania5','$direccion')";

	echo $result=mysqli_query($conexion,$sql);

 ?>