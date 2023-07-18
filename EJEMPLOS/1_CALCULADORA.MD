## index.php
~~~
<?php
# Definimos las constates de interracción con el usuario
    Define("interacción"," <h1>Bienvenido al sistema de calculadora</h1>","<br>");
    #invocamos las constantes
    Echo("interacción");
    #imprimimos mensajes
    Echo("Señor usuario selecione la operacióon que desea realizar:","<br>");

    #menu de enlaces de las operaciones
    Echo("<a href="ope_suma.php">Sumar<a/>","\n");
    Echo("<a href="ope_resta.php">Restar<a/>","\n");
    Echo("<a href="ope_multiplicación.php">Divición<a/>","\n");
    Echo("<a href="ope_divición.php">Divición<a/>","\n");
    
  
?>
~~~

***
## ope_suma.php
~~~
<?php
#interacción
Echo("<h2>Ingrese los valores que desea operar</h2>","<br/>");

#Definimos un formulario de operaciones
Echo"<form name="operaciones" method="POST" action="fun_suma.php">"; Echo ("<br/>");
Echo"Dato1:<inpu name="dato1" type"text">";Echo ("<br/>");
Echo"Dato1:<inpu name="dato2" type"text|">";Echo ("<br/>");
Echo"<input name="operaciones" type="submit" value="sumar">"; Echo("<br/>")
Echo"</form>";

?>
~~~

***
## fun_suma.php
~~~
<?php
#definimos un clase 
class operaciones{
    #inicializamos una funcion
    public function sumar ($dato1,$dato2)
    #declaramos la operación
    {
        $resultado = ($dato1+$dato2);
        Echo("El resultado de la operación es:");
            Echo($resultado);
    }
}
#Imprimir variables
$final = new operaciones();
    $final->sumar(
        $_POST["dato1"],
        $_POST["dato2"])
?>
~~~

***
## ope_resta.php
~~~
<?php
#interacción
Echo("<h2>Ingrese los valores que desea operar</h2>","<br/>");

#Definimos un formulario de operaciones
Echo"<form name="operaciones" method="POST" action="fun_resta.php">"; Echo ("<br/>");
Echo"Dato1:<inpu name="dato1" type"text">";Echo ("<br/>");
Echo"Dato1:<inpu name="dato2" type"text|">";Echo ("<br/>");
Echo"<input name="operaciones" type="submit" value="restar">"; Echo("<br/>")
Echo"</form>";

?>
~~~

***
## fun_resta.php
~~~
<?php
#definimos un clase 
class operaciones{
    #inicializamos una funcion
    public function resta ($dato1,$dato2)
    #declaramos la operación
    {
        $resultado = ($dato1-$dato2);
        Echo("El resultado de la operación es:");
            Echo($resultado);
    }
}
#Imprimir variables
$final = new operaciones();
    $final->sumar(
        $_POST["dato1"],
        $_POST["dato2"])
?>
~~~

***
## ope_multiplicación.php
~~~
<?php
#interacción
Echo("<h2>Ingrese los valores que desea operar</h2>","<br/>");

#Definimos un formulario de operaciones
Echo"<form name="operaciones" method="POST" action="fun_multiplicación.php">"; Echo ("<br/>");
Echo"Dato1:<inpu name="dato1" type"text">";Echo ("<br/>");
Echo"Dato1:<inpu name="dato2" type"text|">";Echo ("<br/>");
Echo"<input name="operaciones" type="submit" value="multiplicar">"; Echo("<br/>")
Echo"</form>";
?>
~~~

***
## fun_multiplicación.php
~~~
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
~~~

***
## ope_divición.php
~~~
<?php
#interacción
Echo("<h2>Ingrese los valores que desea operar</h2>","<br/>");

#Definimos un formulario de operaciones
Echo"<form name="operaciones" method="POST" action="fun_divición.php">"; Echo ("<br/>");
Echo"Dato1:<inpu name="dato1" type"text">";Echo ("<br/>");
Echo"Dato1:<inpu name="dato2" type"text|">";Echo ("<br/>");
Echo"<input name="operaciones" type="submit" value="dividir">"; Echo("<br/>")
Echo"</form>";
?>
~~~

***
## fun_divicion.php
~~~
<?php
#definimos un clase 
class operaciones{
    #inicializamos una funcion
    public function divición ($dato1,$dato2)
    #declaramos la operación
    {
        $resultado = ($dato1/$dato2);
        Echo("El resultado de la operación es:");
            Echo($resultado);
    }
}
#Imprimir variables
$final = new operaciones();
    $final->divición(
        $_POST["dato1"],
        $_POST["dato2"])
?>
~~~









