<?php  
	session_start();
	$Usuario = $_SESSION["Correo_Ingreso"];
	$Fecha = date("Y-m-d H:i:s");
	$id = $_GET['id'];

	$conexion = mysqli_connect("localhost","root","naruto980098","red_social");

	$sql = "Insert Into tblmegusta (me_correo_usuario,mg_fecha_hora,mg_id_publicacion) Values('$Usuario','$Fecha','$id')";
	$res = mysqli_query($conexion,$sql);
 
	if ($res == false)
	{
	echo "Ocurrio un error";
	die();
	}
	header("Location:noticias.php");
?>