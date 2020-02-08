<!DOCTYPE html>
<html>
<head>
    <title>Subire Foto</title>
    <link rel="stylesheet" href="css/subire.css">
</head>
<body>
<?php 
    
    
    $conexion = mysqli_connect("localhost","root","","red_social");
    
    
    



      echo "<table border=5>";

      echo "<th>Imagenes</th>";
      echo "<tr align=center>";

      echo "<td>Imagenes</td>";
      echo "<td>Descripcion</td>";
      echo "<td>Nombre del Archivo</td>";

      echo "<td>Imagenes</td>";
      echo "<td>Descripcion</td>";
      echo "<td>Nombre del Archivo</td>"; 

      echo "<td>Imagenes</td>";
      echo "<td>Descripcion</td>";
      echo "<td>Nombre del Archivo</td>"; 

      echo "</tr>";
    $ruta = "Imagenes1";
    $Directorio = 'Imagenes1';
    $gestor = opendir($ruta);
    $img = 1;
    while(false!==($archivo = readdir($gestor))){

        if($archivo!=". " && $archivo!=".."){
            if($img == 1)

            echo "<tr>";
            echo "<td><a href='imagenes1/$archivo'>";
            echo "<img src='imagenes1/$archivo' width=100 height=100 ></img>";
            echo "</a></td>";
            echo "<td width=200 height=130>Hola</td>";
            echo "<td width=200>$archivo</td>";
            if($img == 3)
            {
            
            
                echo "</tr>";
                $img = 0;
            }
            $img++;
            }
        

    }

    closedir($gestor);
    echo "</table>";

?>
</body>
</html>