<?php
include("conexion.php");

if (isset($_POST['register'])) {

    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['documento']) >= 1 && strlen($_POST['nacimiento']) >= 1) 
    {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $documento = trim($_POST['documento']);
        $nacimiento = trim($_POST['nacimiento']);
        $consulta = "INSERT INTO formulario (nombre, apellido, documento, nacimiento) VALUES ('$nombre','$apellido','$documento','$nacimiento')";
        $resultado = mysqli_query($conex,$consulta);
    }   
}
?>