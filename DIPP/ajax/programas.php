<?php
    
    $archivo = fopen("../data/Post-grado/programas.json","r");
    while(($linea=fgets($archivo))){
    //Cada linea es texto en formato JSON
    $registros[] = json_decode($linea,true);
    }
    //Funcion de utileria para imprimir un arrreglo en formato html
    //var_dump($registros);
    fclose($archivo);
    //Convierte el arreglo en una cadena en formato json
    echo json_encode($registros);

?>