<?php  
$Correo = $_POST["txtCorreo"];
$Contraseña = $_POST["txtContraseña"];
$Confirmar = $_POST["txtConfirmar"];
$Nombre = $_POST["txtNombre"];
if($Contraseña != $Confirmar)
{
	echo "Las Contraseñas no coinciden";
	die();
}

$conexion = mysqli_connect("localhost","root","naruto980098","red_social");

$sql = "Insert Into tblusuario Values(Null,'$Correo', md5('$Contraseña'),'$Nombre')";
$res = mysqli_query($conexion,$sql);
if ($res == false)
{
	echo "Ocurrio un error";
	die();
}
header("Location:index1.html");
?>