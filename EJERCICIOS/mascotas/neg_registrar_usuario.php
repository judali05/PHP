<?php

class usuario{

    public function registrar($nom_usuario, $ape_usuario, $doc_usuario, $celular){
        
        $cont="0";
        include('conexion.php');
        $sql = "SELECT * FROM usuarios WHERE doc_usuario='$doc_usuario' ";

        if(!$result = $db->query($sql)){
            die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
        }
        while($row = $result->fetch_assoc()) {
            $cont=$cont+1;
        //$ccontrasena=stripslashes($row["contrasena"]);
        }
        if ($cont=="0"){
            mysqli_query($db,"INSERT INTO usuarios(nom_usuario, ape_usuario, doc_usuario, celular) VALUES ('$nom_usuario','$ape_usuario','$doc_usuario','$celular')") ;
            echo"Registro exitoso";
        }
        if ($cont!="0") {
            echo"Registro fallido"; echo"<br>";
            echo"usted ya esta registrado";
        }
    }

}
$final = new usuario();
$final -> registrar($_POST["nom_usuario"], $_POST["ape_usuario"], $_POST["doc_usuario"], $_POST["celular"]);

echo "<br>"; 
echo "<a href='index.php'>regresar</a>";

?>

