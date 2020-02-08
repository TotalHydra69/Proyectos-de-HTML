<!DOCTYPE html>
<html>
<head>
	<title>Galeria</title>
	<link rel="stylesheet" type="text/css" href="css/Galeria-Diseño.css">
	<script type="text/javascript">
		function enviar(){
			getElementById('Galeri');
		}
		function enviar2(){
			document.getElementById('Comentario').submit();

		}

	</script>
</head>
<body>
	<div class="Galeria">
		<div class="Galeria2">
		<form action="pagina.php" name="Galeri" id="Galeri" method="POST">
			<label>Galeria</label>
			<table border="2" align="center">
				<tr>
					<th align="center">Imagenes</th>
					<th align="center">Descripcion</th>
					<th align="center">Archivo</th>	
					<th align="center">Me Gusta</th>
					<th align="center">Likes</th>
					<th align="center">Comentarios</th>				
				</tr>
				<?php
				$conexion = mysqli_connect("localhost","root","naruto980098","red_social");

				$sql = "Select * From tblimagenes";
				$res = mysqli_query($conexion,$sql);
				
				
				while($Registro = $res -> fetch_assoc()) 
				{
					
				?>
				<tr>
					
					<td><a target="_blank" href="Mostrar_Comentarios.php?id=<?php echo $Registro['id_foto']; ?>" ">
						<img align="center" src="data:image/jpg;base64,<?php echo base64_encode($Registro['fot_imagen']); ?>"/></a></td>
					<td><?php echo $Registro['fot_descripcion']; ?></td>
					<td><?php echo $Registro['fot_archivo']; ?></td>
					<td><a href="Gusta2.php?id=<?php echo $Registro['id_foto'];?>">
					<img align="center" id="gusta" name="gusta" src="Imagenes/Like.jpg" width="200">
					</a></td>
					<?php  
					$sql2 = "Select count(*) From tblmegusta2 where gu_id_foto = ".$Registro['id_foto'];
					$res2 = mysqli_query($conexion,$sql2);
					$Registro2 = mysqli_fetch_row($res2);
					?>
					<td><?php echo $Registro2[0]; ?></td>
					<td><a href="Comentario_Imagen.php?id=<?php echo $Registro['id_foto'];?>">
					<input type="button" name="" value="Comentarios">
					</a></td>

				</tr>
				<?php }  ?>
			</table>
			
		</form>
	</div>
	</div>
	<div class="clearfix"></div>
</body>
</html>