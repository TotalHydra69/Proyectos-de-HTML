<!DOCTYPE html>
<html>
<head>
	<title>Cambiar Nombre</title>
	<script type="text/javascript">

		function Cambio()
		{
			if(document.getElementById('txtNombre').value == ""){
				alert("Falto llenar el nombre");
				document.getElementById('txtNombre').style.borderColor = "red";
				return false;
			}
			if(document.getElementById('txtContraseña').value == ""){
				alert("Falto llenar la Contraseña");
				document.getElementById('txtContraseña').style.borderColor = "red";
				return false;
			}

			if(document.getElementById('txtContraseña_Confirmar').value == document.getElementById('txtContraseña')){
				alert("Las contraseñas no coinciden");
				document.getElementById('txtContraseña').style.borderColor = "red";
				document.getElementById('txtContraseña_Confirmar').style.borderColor = "red";
				return false;			
				}
				document.getElementById("Cambiare").submit();
		}

		function Cancelamos(){
			document.getElementById("Cancelar").submit();}
	</script>
	<link rel="stylesheet" href="css/cambiar.css">
</head>
<body>
	<div class="Cambia">
	<form id="Cambiare" name="Cambiare" method="POST" action="cambiar2.php">
	<img class="Avatar" src="Imagenes/logo.jpg" alt="Logo-Principal">
	<label for="Cambiar_Nombre">Cambiar Nombre</label>
	<input type="text" name="txtNombre" id="txtNombre" placeholder="Coloque su nuevo nombre">
	<label>Correo</label>
	<input type="text" name="txtConfirmar_Correo" id="txtConfirmar_Correo" placeholder="Coloque su correo">
	<label>Contraseña</label>
	<input type="password" name="txtContraseña" id="txtContraseña" placeholder="Coloque su Contraseña">
	<label>Confirmar Contraseña</label>
	<input type="password" name="txtContraseña_Confirmar" id="txtContraseña_Confirmar" placeholder="Confirme la Contraseña">
	<input type="button" name="btnCambiar" value="Guardar" onclick="Cambio();">
	</form>
	</div>

	<div class="Cancelar">
		<form id="Cancelar" name="Cancelar" method="POST" action="noticias.php">
			<input type="button" name="btnCancelar" id="btnCancelar" value="Regresar" onclick="Cancelamos();">
		</form>
	</div>
</body>
</html>