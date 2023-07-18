index.php
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
ope_suma.php
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
