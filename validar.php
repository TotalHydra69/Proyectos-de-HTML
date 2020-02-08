<?php 
$Correo_Ingreso = $_POST["txtCorreo"];
$Contraseña_Ingreso = $_POST["txtContraseña"];


$conexion = mysqli_connect("localhost","root","","red_social");
$sql = "Select * From tblusuario where usu_correo = '$Correo_Ingreso'";
$res = mysqli_query($conexion,$sql);
if ($res == false)
{
	echo '<script>alert("Error al conectar a la base de datos")</script>';
	die();
}
$registro = mysqli_fetch_assoc($res);
$CorreoBd = $registro["usu_correo"];
$contraseñaBd = $registro["usu_password"];
if($CorreoBd != $Correo_Ingreso){
	echo '<script>alert("Error en el Correo")</script>';
	die();
	}
else{
	if($contraseñaBd != md5($Contraseña_Ingreso)){
	echo '<script>alert("Error en la Contraseña")</script>';
	die();
	}
}
session_start();
$_SESSION["Correo_Ingreso"] = $Correo_Ingreso;
$_SESSION["nombre"] = $registro["usu_nombre"];
$_SESSION["numero"] = $registro["usu_id"];
mysqli_close($conexion);
header("Location:principal.php");
echo $_SESSION["nombre"];
?>