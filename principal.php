<?php  
session_start();
if(!isset($_SESSION["Correo_Ingreso"]))
{

	header("Location:index1.html");
}

   $conexion = mysqli_connect("localhost","root","","red_social");
?>
<!DOCTYPE html>
<html>
<head>

<script type="text/javascript">
			
			function verificar()
			{
			document.getElementById("ingreso").submit();
			}
</script>
	<title>Pagina Principal</title>
	<frameset rows="160,*">
		<frame src="Primera_Parte.php" name="Columna1" noresize border="0" >
		<frameset cols="270,*">
		<frame src="Segunda_Parte.php" name="Columna2" noresize></frame>
		<frame src="noticias.php" name="Columna3" noresize></frame>
	</frameset>
</head>
<body>

</body>
</html>