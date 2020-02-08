<!DOCTYPE html>
<html>
<head>
	<title>Segunda_Parte</title>
	<script type="text/javascript">
		function Opcion1(){
		if(document.getElementById('Segunda-Parte1')){
			document.getElementById('Segunda-Parte1').submit();
		}
	}

		function Opcion2(){
			if(document.getElementById('Segunda-Parte2')){
			document.getElementById('Segunda-Parte2').submit();
			}
		}

		function Opcion3(){
			if(document.getElementById('Segunda-Parte3')){
			document.getElementById('Segunda-Parte3').submit();
			}
		}

		function Opcion4(){
			if(document.getElementById('Segunda-Parte4')){
			document.getElementById('Segunda-Parte4').submit();
			}
		}

		function Opcion5(){
			if(document.getElementById('Segunda-Parte5')){
			document.getElementById('Segunda-Parte5').submit();
			}
		}

		function Opcion6(){
			if(document.getElementById('Segunda-Parte6')){
			document.getElementById('Segunda-Parte6').submit();
			}
		}


	</script>

	<link rel="stylesheet" href="css/Segunda_Partesss.css">

</head>
<body>
		<div class="Segunda-Parte6">
			<form id="Segunda-Parte6" name="Segunda-Parte6" method="POST" action="Alexis.html" target="_blank">
				<input type="button" name="exposicion" value="Exposicion" onclick="Opcion6();">
			</form>
		</div>

		<div class="Segunda-Parte1">
			<form id="Segunda-Parte1" name="Segunda-Parte1" method="POST" action="noticias.php" target="Columna3">
			<input type="button" name="Publicar" value="Pagina Principal" onclick="Opcion1();">
			</form>
		</div>
		<div class="Segunda-Parte2">
			<form id="Segunda-Parte2" name="Segunda-Parte2" method="POST" action="publicar.php" target="Columna3">
			<input type="button" name="Publicar" value="Publicacion" onclick="Opcion2();">
			</form>
		</div>
		<div class="Segunda-Parte3">
			<form id="Segunda-Parte3" name="Segunda-Parte3" method="POST" action="cambiar.php" target="Columna3">
				<input type="button" name="Nombre" value="Cambiar Nombre" onclick="Opcion3();">			
			</form>
		</div>
		
		<div class="Segunda-Parte4" >
			<form id="Segunda-Parte4" name="Segunda-Parte4" method="POST" action="subir.php" target="Columna3">
			<input type="button" name="Foto" value="Subir Foto" onclick="Opcion4();">
			</form>
		</div>
		<div class="Segunda-Parte5">
			<form id="Segunda-Parte5" name="Segunda-Parte5" method="POST" action="cerrar_sesion.php" target="_top">
			<input type="button" name="Cesion" value="Cerrar Sesión" onclick="Opcion5();">
			</form>
		</div>

</body>
</html>