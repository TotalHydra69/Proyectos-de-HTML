<?php 
	$Directorio = 'imagenes';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ficheros</title>
</head>
<body>
	<div>
	<?php 
	if($dir = opendir($Directorio)){
		while($archivo = readdir($dir)){
			if($archivo != '.' && $archivo != '..'){
			echo "<br>Archivo: <strong>$archivo</strong>";}
		}
	}


	 ?>
	 </div>
</body>
</html>