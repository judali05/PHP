<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Pet-registro</title>
</head>
<body>

  <h1>Pet-registro</h1>

    <?php

    echo "<div class='count'>";

    include('pres_form_usuario.php');

    include('pres_form_mascotas.php');

    echo "</div>";

    include('pres_resultado.php')

    ?>
    
</body>
</html>

