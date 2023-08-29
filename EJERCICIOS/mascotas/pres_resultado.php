<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
 
    <div class="cont2">
        <h2>tabla</h2>
        <table>
            <thead>
            <tr>
                <th>NOMBRE USUARIOS </th>
                <th>APELLIDO USUARIOS </th>
                <th>DOCUMENTO USUARIOS</th>
                <th>NOMBRE MASCOTAS </th>
                <th>DOCUMENTO MASCOTAS </th>
                <th>TIPOS DE MASCOTAS </th>
            </tr>
            <thead>

            <tbody>
                <?php
                include("list_resultado.php");
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>