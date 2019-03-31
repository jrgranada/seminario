<?php
	$usuario = "jrgranada";
	$contrasena = "Juan4409454";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
	$servidor = "localhost";
	$basededatos = "seminario";

	$conexion = mysqli_connect( $servidor, $usuario, $contrasena) or die ("No se ha podido conectar al servidor de Base de datos");
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	$sql = "INSERT INTO usuarios(nombre)VALUES ('".$_GET["name"]."')";
	 
	if (mysqli_query($conexion, $sql)) {
		echo "El usuario '".$_GET["name"]."' se registró correctamente";
	} else {
		echo "Error: " . $sql . "" . mysqli_error($conexion);
	}
	$conexion->close();
?>
