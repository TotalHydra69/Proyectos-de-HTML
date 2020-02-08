<?php 
session_start(); 
$Usuario = $_SESSION["Correo_Ingreso"];
$Noticia = $_POST["txtNoticia"];
$Fecha = date("Y-m-d H:i:s");


$conexion = mysqli_connect("localhost","root","naruto980098","red_social");

$sql = "Insert Into tblpublicacion Values(Null, '$Usuario', '$Noticia', '$Fecha')";
$res = mysqli_query($conexion,$sql);
if ($res == false)
{
	echo "Ocurrio un error";
	die();
}
header("Location:noticias.php");
?>