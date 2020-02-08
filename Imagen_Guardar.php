<?php
	session_start();
	$Nombre_Usu = $_SESSION['Correo_Ingreso'];
	$Nombre = $_SESSION['numero'];

	$conexion = mysqli_connect("localhost","root","naruto980098","red_social");


	$sql = "Select usu_id From tblusuario where usu_correo = '$Nombre_Usu'";
	$res = mysqli_query($conexion,$sql);
	$Registro = mysqli_fetch_assoc($res);

	$Texto = $_POST['Archivo'];
	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
	$Archivo = $_FILES['imagen']['name'];

	$query = "Insert Into tblimagenes (fot_id_usuario,fot_descripcion,fot_archivo,fot_imagen) Values('$Nombre','$Texto','$Archivo','$imagen')";


	$resultado = $conexion -> query($query);

	$Descripcion = $_POST['Archivo'];
	$Temporal = $_FILES['imagen']['tmp_name'];
	$Archivo = $_FILES['imagen']['name'];
	move_uploaded_file($Temporal,"Imagenes1/" . $Archivo);

	if($resultado){
		echo "Imagen y Descripcion guardadas correctamente";
	}else{
		echo "Error al guardar";
	}
	header("Location: noticias.php");
  ?>