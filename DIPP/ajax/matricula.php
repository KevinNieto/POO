<?php
    $archivo = fopen("../data/secciones.json","r");

    //Cada linea es texto en formato JSON
    $registros[$_GET["esto"]] = json_decode($linea,true);
    }
    fclose($archivo);
    //Convierte el arreglo en una cadena en formato json
    echo json_encode($registros);

?>