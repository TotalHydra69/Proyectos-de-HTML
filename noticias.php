<?php 
	$conexion = mysqli_connect("localhost","root","naruto980098","red_social");

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Noticias</title>
 	<link rel="stylesheet" href="css/noticias.css">
 </head>
 <body>
 	<label for="noticia">Pagina Principal</label>
 	<table>
	<tr>
		<th align="center">Usuario</th>
		<th align="center">Noticias</th>
		<th align="center">Fechas</th>
		<th align="center">Me Gusta</th>
		<th align="center">Likes</th>
	</tr>
 	<?php
	$sql = "Select * From tblpublicacion";
	$res = mysqli_query($conexion,$sql);
	

	While($Registro = mysqli_fetch_assoc($res))
	{
	 ?>
	<tr>
		<td><?php echo $Registro["pub_usuario"] ?></td>
		<td><?php echo $Registro["pub_noticia"] ?></td>
		<td><?php echo $Registro["pub_fecha"] ?></td>
		<form method="Gusta.php" id="gusta" name="gusta" method="POST">
		<td><a href="Gusta.php?id=<?php echo $Registro['pub_id'];?>">
		<img align="center" id="gusta" name="gusta" src="Imagenes/Like.jpg" width="100">
		</a></td>
		<?php 
		$sql2 = "Select count(*) From tblmegusta where mg_id_publicacion = ".$Registro['pub_id'];
		$res2 = mysqli_query($conexion,$sql2);
		$Registro2 = mysqli_fetch_row($res2);  ?>
		<td><?php echo $Registro2[0]; ?></td>
		</form>
	</tr>
	<?php 
}
?>
</table>
 </body>
 </html>