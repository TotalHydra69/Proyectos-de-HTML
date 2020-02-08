<?php  
session_start();
if(!isset($_SESSION["Correo_Ingreso"]))
{

	header("Location:index1.html");
}
	$Nombre_Usu = $_SESSION['Correo_Ingreso'];
   $conexion = mysqli_connect("localhost","root","naruto980098","red_social");
   $sql = "Select * From Foto_Perfil where Fot_Fecha = (select max(Fot_Fecha) from Foto_Perfil) and Fot_Usuario = '$Nombre_Usu'";
   $res = mysqli_query($conexion,$sql);
   $Registro = $res -> fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
	<link rel="stylesheet" href="css/Primera_Partessss.css">
</head>
<body>
	<?php  
	$Usuario = $_SESSION["Correo_Ingreso"];?>
	<div class="Primera-Parte">
	<img class="Logo" src="Imagenes/logo.jpg" alt="Logo-Principal" >
	<form id="Primera-Parte" name="Primera-Parte" method="POST">
	<h1 align="center"><?php echo "Bienvenido" ." " . $Usuario;?></h1>
	<img src="data:image/jpg;base64,<?php echo base64_encode($Registro['Fot_Imagen']); ?>">
	</form>
	</div>
</body>
</html>