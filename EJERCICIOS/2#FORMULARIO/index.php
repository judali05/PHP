<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>formulario</h1>
<form name='formulario' method='POST' action='db.sql'><br>
<input name='nombre' type='text' placeholder='nombre'><br>
<input name='apellido' type='text' placeholder='apellido'><br>
<input name='documento' type='number' placeholder='numero de identidad'><br>
<input name='nacimiento' type='date' placeholder='fecha de nacimiento'><br>
<input name='db' type='submit' value='enviar'>
<?php

include("db.php");


?>
</body>
</html>