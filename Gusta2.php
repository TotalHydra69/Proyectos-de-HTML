<?php
	session_start();
	$Usuario = $_SESSION["Correo_Ingreso"];
	$Fecha = date("Y-m-d H:i:s");
	$id = $_GET['id'];

	$conexion = mysqli_connect("localhost","root","naruto980098","red_social");

	$sql = "Insert Into tblmegusta2 (gu_correo_usuario,gu_fecha_hora,gu_id_foto) Values('$Usuario','$Fecha','$id')";
	$res = mysqli_query($conexion,$sql);
 
	if ($res == false)
	{
	echo "Ocurrio un error";
	die();
	}
	header("Location:galeria.php");
?>