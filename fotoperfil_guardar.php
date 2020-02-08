<?php
	session_start();
	$Nombre_Usu = $_SESSION['Correo_Ingreso'];
	$Fecha = date("Y-m-d H:i:s");

	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
	$Archivo = "$Nombre_Usu.jpg";

	$conexion = mysqli_connect("localhost","root","naruto980098","red_social");

	$sql = "Insert Into Foto_Perfil(Fot_Archivo,Fot_Imagen,Fot_Usuario,Fot_Fecha) Values('$Archivo','$imagen','$Nombre_Usu','$Fecha')";
	$res = mysqli_query($conexion,$sql);
	if ($res == false)
	{
	echo "Ocurrio un error";
	die();
	}
	header("Location:subir.php");


  ?>