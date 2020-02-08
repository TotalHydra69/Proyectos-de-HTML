<?php  
session_start();
	$Nombre_Usu = $_SESSION['Correo_Ingreso'];
	$Nombre_Cambiar = $_POST['txtNombre'];
	$Contraseña = $_POST['txtContraseña'];

	$conexion = mysqli_connect("localhost","root","naruto980098","red_social");
	$sql = "Update tblusuario Set usu_nombre = '$Nombre_Cambiar' Where usu_correo = '$Nombre_Usu'";
	$res = mysqli_query($conexion,$sql);
	if ($res == false)
{
	echo "Ocurrio un error";
	die();
}
header("Location:noticias.php");

?>