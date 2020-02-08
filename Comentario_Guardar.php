<?php  
session_start();

$Usuario = $_SESSION["Correo_Ingreso"];
$Fecha = date("Y-m-d H:i:s");
$Id = $_POST['txt_id_foto'];
$Comentario = $_POST['txtComentario'];

$conexion = mysqli_connect("localhost","root","naruto980098","red_social");

$sql = "Insert Into tblcomentario_foto(cf_fot_id,cf_fecha_hora,cf_Comentario,cf_usu_correo) Values('$Id','$Fecha','$Comentario','$Usuario')";
$res = mysqli_query($conexion,$sql);
	if ($res == false)
	{
	echo "Ocurrio un error";
	die();
	}
header("Location: galeria.php");
?>