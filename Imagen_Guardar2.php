<?php  
	session_start();
	$Nombre_Usu = $_SESSION['Correo_Ingreso'];
	$Nombre = $_SESSION['numero'];

	$conexion = mysqli_connect("localhost","root","","red_social");

	$Descripcion = $_POST['Archivo'];
	$Temporal = $_FILES['imagen']['tmp_name'];
	$Archivo = $_FILES['imagen']['name'];
	move_uploaded_file($Temporal,"Imagenes1/" . $Archivo);

	$sql = "Select usu_id From tblusuario where usu_correo = '$Nombre_Usu'";
	$res = mysqli_query($conexion,$sql);
	$Registro = mysqli_fetch_assoc($res);
	


	$Query = "Insert Into tblimagenes2 (fot_id_usuario,fot_descripcion,fot_imagen) Values('$Nombre','$Descripcion','$Archivo')";
	$resultado = $conexion -> query($Query);
	if($resultado){
		echo "Imagen y Descripcion guardadas correctamente";
	}else{
		echo "Error al guardar";
	}

	header("Location: noticias.php");

?>