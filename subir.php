<!DOCTYPE html>
<html>
<head>
	<title>Subir Foto</title>
	<link rel="stylesheet" href="css/subidass.css">
	<script type="text/javascript">
		function mostrar_imagen(){
			var preview = document.querySelector('img');
			var file = document.querySelector('input[type=file]').files[0];
			var leer = new FileReader();

			if(file){
				leer.readAsDataURL(file);
				leer.onloadend = function(){
					preview.src = leer.result;
				}
				;
			}
			else{
				preview.src = "";
			}
		}

		function mostrar_galeria(){
			document.getElementById('Gale').submit();
		}

		function mostrar_Perfil(){
			document.getElementById('Per').submit();
		}
	</script>
	
</head>
<body>
	
	<?php
		$conexion = mysqli_connect("localhost","root","naruto980098","red_social"); 
	?>
<div class="subire">
	<form action="Imagen_Guardar.php" id="usu_id" method="POST" enctype="multipart/form-data">
		<label>Coloque su Imagen</label>
		<input type="text" REQUIRED name="Archivo" placeholder="Descripcion de la Imagen" value=""/>
		<table>
			<tr><td><img src="Imagenes/Usuario.jpg" style="width: 430px; height: 300px; border: dashed blueviolet;"></td></tr>
		</table>
		<input type="file" REQUIRED name="imagen" onchange="mostrar_imagen();" >
		<input type="submit" value="Guardar">
	</form>
</div>
<div class="Imagenes" >
<form method="POST" id="Gale" name="Gale" action="galeria.php" target="_blank">
<input type="button" name="Galeria" id="Galeria" value="Galeria" onclick="mostrar_galeria();">
</form>
<div>

<div class="Perfil">
	<form method="POST" id="Per" name="Per" action="fotoperfil.php" target="_blank">	
	<input type="button" name="Per" id="Per" value="Foto de Perfil" onclick="mostrar_Perfil();">
	</form>
</div>
	

</div>

</body>
</html>