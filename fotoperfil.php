<!DOCTYPE html>
<html>
<head>
	<title>Foto de Perfil</title>
	<link rel="stylesheet" href="css/Perfil.css">
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
	</script>
</head>
<body>
<div class="Perfil">
	<form action="fotoperfil_guardar.php" id="usu_id" method="POST" enctype="multipart/form-data">
		<label>Foto de Perfil:</label>
		<table>
			<tr><td><img src="Imagenes/Usuario.jpg" style="width: 430px; height: 300px; border: dashed blueviolet;"></td></tr>
		</table>
		<input type="file" REQUIRED name="imagen" onchange="mostrar_imagen();" >
		<input type="submit" value="Guardar">
	</form>
</div>
</body>
</html>