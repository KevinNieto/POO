<?php
    
    $archivo = fopen("../data/usuarios.json","r");
    while(($linea=fgets($archivo))){
        $registro = json_decode($linea,true);
        if (
            $_POST["usuario"]==$registro["usuario"] && 
            $_POST["password"]==$registro["password"]
        ){
            $registro["estatus"] = "1"; //Acceso exitoso
            $registro["mensaje"] = "Acceso autorizado";
            setcookie("usuario", $_POST["usuario"], time() + 3600,"/");
            setcookie("tipoUsuario", $registro['tipoUsuario'], time() + 3600,"/");
            setcookie("nombre", $registro['nombre'], time() + 3600,"/");
            setcookie("carrera", $registro['carrera'], time() + 3600,"/");
            echo json_encode($registro);
            exit;
        }
    }
    //No encontro el registro
    $registro = array();
    $registro["estatus"] = "0"; //Acceso no autorizado
    $registro["mensaje"] = "Acceso no autorizado";
    echo json_encode($registro);
?>