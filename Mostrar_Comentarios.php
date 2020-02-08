<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/Mostrar_Comentarios.css">
	<title>Galeria</title>
</head>
<body>

	<?php  
	$conexion = mysqli_connect("localhost","root","naruto980098","red_social");

	$Num = $_REQUEST['id'];
	$sql = "Select * From tblimagenes where id_foto = '$Num'";
	$res = mysqli_query($conexion,$sql);
	$Registro = $res -> fetch_assoc();


	$sql2 = "Select * From tblcomentario_foto where cf_fot_id = '$Num'";
	$res2 = mysqli_query($conexion,$sql2);

	$sql3 = "Select * From tblcomentario_foto";
	$res3 = mysqli_query($conexion,$sql3);
	?>


		<center><br><br><br>
		<div class="mostrar">
			<form method="POST" enctype="multipart/form-data">
			<label><?php echo $Registro['fot_descripcion']; ?></label>
			<img  src="data:image/jpg;base64,<?php echo base64_encode($Registro['fot_imagen']); ?>"/>
			<input type="text" name="" hidden="" value="<?php echo $Num;?>">
		</form>
		</center>
		</div>

		<div class="mostrar2">
			<form>
				<label>Comentarios:</label>
				<table border="2" align="center">
					<th>Comentarios</th>
					<th>Usuarios</th>
					<th>Fecha de publicacion</th>
				<?php While($Registro2 = mysqli_fetch_assoc($res2)) 
				{
				?>
					<tr>
						<td><?php echo $Registro2['cf_Comentario'] ?></td>
						<td><?php echo $Registro2['cf_usu_correo'] ?></td>
						<td><?php echo $Registro2['cf_fecha_hora'] ?></td>
					</tr>
				<?php } ?>
				</table>
			</form>
		</div>

</body>
</html>