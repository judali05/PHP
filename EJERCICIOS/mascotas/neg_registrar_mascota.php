<?php

class mascota{

    public function registrar($doc_usuario, $nom_mascota, $doc_mascota, $tipo_mascota){
        
        include('conexion.php');
        mysqli_query($db,"INSERT INTO mascotas(doc_usuario, nom_mascota, doc_mascota, tipo_mascota) VALUES ('$doc_usuario','$nom_mascota','$doc_mascota','$tipo_mascota')") ;
        echo"Registro exitoso, su mascota ya esta registrada";

    }

}
$final = new mascota();
$final -> registrar($_POST["doc_usuario"], $_POST["nom_mascota"], $_POST["doc_mascota"], $_POST["tipo_mascota"]);
echo "<br>"; 
echo "<a href='index.php'>regresar</a>";

?>