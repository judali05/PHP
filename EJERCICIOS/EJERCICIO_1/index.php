<!DOCTYPE html>
<html>
<head>
    <title>Formulario PHP</title>
</head>
<body>

    <h2>Ingrese su información:</h2>
    <form method="post" action="">
        <label>Nombre: <input type="text" name="nombre"></label><br>
        <label>Documento: <input type="number" name="documento"></label><br>
        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $documento = $_POST["documento"];

    echo "<h2>Información recibida:</h2>";
    echo "-Nombre: " , $nombre , "<br>";
    echo "-Documento: " , $documento , "<br>";
    echo "-Un saludo a su Instructor virtua: Javier Andres Galvis Merchan";
    
    }

    ?>

</body>
</html>