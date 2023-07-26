<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    
</head>
<body>
    <div>

        <h1>formulario</h1>
        <form clase='formu' method='POST'><br>
            <input name='nombre' type='text' placeholder='nombre'><br>
            <input name='apellido' type='text' placeholder='apellido'><br>
            <input name='documento' type='number' placeholder='numero de identidad'><br>
            <input name='nacimiento' type='date' placeholder='fecha de nacimiento'><br>
            <input name='register' type='submit' value='enviar'>
        </form>
    </div>
</div>
<?php
include("db.php");
?>
</body>
</html>