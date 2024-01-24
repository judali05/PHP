<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
    <title>tienda</title>
</head>
<body>

<h1>frutas</h1>
<?php


        include ('conexion.php');

        $sql = "SELECT * FROM productos"; 
        if (!$result = $db->query($sql)){
            die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error . ']');
        }

        while ($row = $result->fetch_assoc()){
            
            $nnombre = stripslashes($row["nombre"]);
            $ddescripcion = stripslashes($row["descripcion"]);
            $vvalor = stripslashes($row["valor"]);
            $ccantidad = stripslashes($row["cantidad"]);   
            $uurl = stripslashes($row["url"]);   

            echo "<div>
                    
                    <p> $nnombre </p>
                    <p><img src='$uurl' alt='Imagen del producto'></p>
                    <p> $ddescripcion </p>
                    <p> $vvalor </p>
                    <p> $ccantidad </p>
                
                  </div>";
        }

?>
</body>
</html>