<?php

class usuario{

    public function registrar($nom_usuario, $ape_usuario, $doc_usuario, $celular){
        
        include('conexion.php');
        mysqli_query($db,"INSERT INTO usuarios(nom_usuario, ape_usuario, doc_usuario, celular) VALUES ('$nom_usuario','$ape_usuario','$doc_usuario','$celular')") ;
        echo"Registro exitoso";

    }

}
$final = new usuario();
$final -> registrar($_POST["nom_usuario"], $_POST["ape_usuario"], $_POST["doc_usuario"], $_POST["celular"]);

echo "<br>"; 
echo "<a href='pres_form_usuario.php'>regresar</a>";

?>
