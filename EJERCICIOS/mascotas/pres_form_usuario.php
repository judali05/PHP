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

<div class="cont" value="2">
    
 <form method="POST" action="neg_registrar_usuario.php">

    <h2>Registrar Usuario</h2>
    <label class="inline">Nombre:<input name="nom_usuario" type="text" placeholder="ingrese su nombre" required ></label>
    <label class="inline">Apellido:<input name="ape_usuario" type="text" placeholder="ingrese su apellido" ></label>
    <label class="inline">Documento:<input name="doc_usuario" type="number" placeholder="ingrese su documento" required ></label>
    <label class="inline">Celular:<input name="celular" type="number" placeholder="ingrese su celular" required ></label>
    <input class="boton" type="submit" value="enviar">
    
 </form>
</div>

</body>
</html>