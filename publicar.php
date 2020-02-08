<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
			
			function verificar()
			{
			if(document.getElementById('txtNoticia').value == "")
			{
				alert("No lo deje en blanco");
				document.getElementById("txtCorreo").style.borderColor="red";

				return false;
			}
			
			document.getElementById("noticia").submit();
			}

			function regresa(){
				document.getElementById("noticia2").submit();
			}
		</script>
		<link rel="stylesheet" href="css/noticia.css">
	<title>Noticias</title>
</head>
<body>
<div class="noticia">
	<form id="noticia" name="noticia" method="POST" action="Publicar2.php">
	<label for="noticias">Escriba su Noticia:</label>
	<input type="text" id="txtNoticia" name="txtNoticia" placeholder="Escriba su Noticia:"  >
	<br><br>
	<input type="button" id="txtPublicar" name="txtPublicar" value="Publicar" onclick="verificar();">
	</form>
</div>

<div class="noticia2">
	<form id="noticia2" name="noticia2" method="POST" action="noticias.php">
		<input type="button" id="regresar" name="regresar" value="Regresar" onclick="regresa();">
	</form>
	
</div>

</body>
</html>