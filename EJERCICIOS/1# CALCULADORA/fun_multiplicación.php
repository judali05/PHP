<?php
#definimos un clase 
class operaciones{
    #inicializamos una funcion
    public function multiplicación ($dato1,$dato2)
    #declaramos la operación
    {
        $resultado = ($dato1*$dato2);
        Echo("El resultado de la operación es:");
            Echo($resultado);
    }
}
#Imprimir variables
$final = new operaciones();
    $final->multiplicación(
        $_POST["dato1"],
        $_POST["dato2"])
?>
