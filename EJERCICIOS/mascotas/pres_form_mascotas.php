<?php
    include('conexion.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="cont" value="1">
    
 <form method="POST" action="neg_registrar_mascota.php">

    <h2>Registrar Mascota</h2>
    <label>Documento usuario:<input name="doc_usuario" type="number" placeholder="ingrese su documento" required ></label>
    <label>Nombre mascota:<input name="nom_mascota" type="text" placeholder="ingrese el nombre de su mascota" required ></label>
    <label>Documento mascota:<input name="doc_mascota" type="number" placeholder="ingrese el documento de su mascota" required ></label>
    <label>Tipo de mascota:
    <select name="tipo_mascota" required>
        <option value="">(seleccione)</option>
            <?php
                $sql = "SELECT * FROM tipo_mascotas";
                if (!$result = $db->query($sql)){

                    die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
               
                }
                
                while ($row = $result->fetch_assoc()){

                    $iid_tipo=stripslashes($row["id_tipo"]);
                    $mmascota=stripslashes($row["mascota"]); 
                    echo "<option value='$iid_tipo'>$mmascota</option>";

                }
            ?>
    </select>
    </label>
    <input class="boton" type="submit" value="enviar">

 </form>
</div>

</body>
</html>