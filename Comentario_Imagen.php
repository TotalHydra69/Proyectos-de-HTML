<?php  

	$conexion = mysqli_connect("localhost","root","naruto980098","red_social");

	$Num = $_REQUEST['id'];
	$sql = "Select * From tblimagenes where id_foto = '$Num'";
	$res = mysqli_query($conexion,$sql);
	$Registro = $res -> fetch_assoc();


?>

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function comenta(){
			document.getElementById('Comentario').submit();
		}
	</script>
	<title>Comentarios</title>
	<link rel="stylesheet" type="text/css" href="css/Comentario.css">

</head>
<body>
	<div class="Comentarios">
		<form action="Comentario_Guardar.php" method="POST" name="Comentario" id="Comentario">
			<img  src="data:image/jpg;base64,<?php echo base64_encode($Registro['fot_imagen']); ?>"/>
			<label>Coloque su Comentario:</label>
			<input REQUIRED type="text" name="txtComentario">
			<input type="text" name="txt_id_foto" hidden="" value="<?php echo $Registro['id_foto']; ?>">
			<input type="button" name="" onclick="comenta();" value="Guardar">
		</form>
	</div>
	<div class="Comentarios2">
			<label><?php echo $Registro['fot_descripcion'];?></label>	
	</div>
</body>
</html>