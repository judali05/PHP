<?php

class resultado{

    public function listar(){

        include ('conexion.php');

        $sql = "SELECT * FROM mascotas"; 
        if (!$result = $db->query($sql)){

            die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
        
        }

        while ($row = $result->fetch_assoc()){
            
            $nnom_mascota=stripslashes($row["nom_mascota"]);
            $ddoc_mascota=stripslashes($row["doc_mascota"]);
            $ttipo_mascota=stripslashes($row["tipo_mascota"]);
            $ddoc_usuario=stripslashes($row["doc_usuario"]);   

                $sql2 = "SELECT * FROM usuarios WHERE doc_usuario='$ddoc_usuario'";
                if (!$result2 = $db->query($sql2)){

                    die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
                
                }

                while ($row2 = $result2->fetch_assoc()){

                    $nnom_usuario=stripslashes($row2["nom_usuario"]);
                    $aape_usuario=stripslashes($row2["ape_usuario"]);

                    
                   

                    echo "<tr> <td> $nnom_usuario </td> <td> $aape_usuario </td> <td> $ddoc_usuario </td> <td> $nnom_mascota </td> <td> $ddoc_mascota </td> <td> $ttipo_mascota </td> </tr>";

                }

        }

    }

}

$final = new resultado();
$final -> listar();

?>