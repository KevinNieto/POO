<?php 
  if (!isset($_COOKIE["usuario"])){
          header("Location: ../../../no-autorizado.html");//Redireccion con PHP
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href= "../../../img/logo.ico">

    <title>Creacion de Carrera</title>

    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/custom.css" rel="stylesheet">
    
    
</head>
<body style="padding: 7rem; background-color: white!important">
<header>
        <!--INICIO DE LA BARRA DE NAVEGACION-->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <a class="navbar-brand" id="el-logo" href="ajustes-postgrado.php" >DIPP</a>
       
    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
       <div class="aladerecha">
          <ul class="navbar-nav mr-auto">
            
    <!--DROPDOWN DE USUARIO--> 
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../../img/tuerca.png" width="30"></a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
                  <div class="row" style="padding:2px;">
                  <div class="col-4">
                    <img src="../../../img/user.png" width="50">
                  </div>
                  <div class="col-8">
                    <h6><?php echo $_SESSION["usuario"];  ?></h6>
                  </div>
              </div>

                <a class="dropdown-item" href="../../../ajax/cerrar-sesion.php">Cerrar Sesion</a>
              </div>
            </li>
          </ul>
          </div>  
        </div>
      </nav>
    </header>
    <main>
        <div class="row">
        <div class="col-lg-6 col-xs-12 " style="position: absolute ;margin-left: auto; margin-right: auto;">
             <form action="" method="post">
              <h1>Creacion de estudiante</h1>
              <select class="form-control" name="programa" style="margin-bottom:10px" id="slc-centro">
              </select>
              <select class="form-control" name="titulo" style="margin-bottom:10px" id="">
                  <option value="">-Titulo de grado-</option>
                  <option value="">Licenciatura</option>
                  <option value="">Ingenieria</option>
                  <option value="">Doctor</option>
              </select>
              <input type="text" id="inputCuenta formulario" class="form-control" name="nombre"placeholder="Nombre del Estudiante" required autofocus style="margin-bottom: 10px;">
              <input type="text" id="inputCuenta formulario" class="form-control" name="usuario"placeholder="Numero de cuenta a asignar" required autofocus style="margin-bottom: 10px;">
              <input type="text" id="inputCuenta formulario" class="form-control" name="correo"placeholder="Correo Institucional" required autofocus style="margin-bottom: 10px;">
              <input type="text" id="inputCuenta formulario" class="form-control" name="indicep" placeholder="Indice del periodo" required autofocus style="margin-bottom: 10px;">
              <input type="text" id="inputCuenta formulario" class="form-control" name="indiceg" placeholder="Indice del global" required autofocus style="margin-bottom: 10px;">
              <input type="text" id="inputCuenta formulario" class="form-control" name="contrasena"placeholder="Contraseña" required autofocus style="margin-bottom: 10px;">


              <button class="class-6 btn btn-lg btn-primary btn-block color-boton" id="btn-login" type="submit" name="envio">Enviar</button>
            </form>
          </div>
     </div>
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DIPP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Estas seguro que deseas crear este alumno en el sistema?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Atras</button>
        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>  
    </main>
    <script src="../../../js/jquery-3.3.1.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
</body>


</body>
<script>
$(document).ready(function(){
	console.log("El DOM ha sido cargado, debe cargar todos los tweets e imprimirlos tal y como lo muestrael html estatico");
	///Peticion AJAX para obtener usuarios
	$.ajax({
		url:"../../../ajax/programas.php",
		method:"GET",
		dataType:"json",
		success:function(respuesta){
			console.log(respuesta);
			$("#slc-centro").append(`<option value="">-Programa-</option>`);
			for(var i=1; i<respuesta.length;i++)
				$("#slc-centro").append(`<option  >${respuesta[i].programa}</option>`);
		},
		error:function(error){
			console.log(error);
    }
    
    });
});


</script>
 <?php 
    if (isset($_POST["envio"])){ 
      
          // $registrar = array(
          //"usuario" =>  $_POST["usuario"],
          //"password" => $_POST["contrasena"],
          //"nombre" => $_POST["nombre"],
          //"tipoUsuario" =>"estudiantePost",
          //"programa" => $_POST["programa"],
          // );
          //fopen("../../../data/usuarios.json", "a+");
          //fwrite("../../../data/usuarios.json", json_encode($registrar) . "\n");
          //fclose("../../../data/usuarios.json");
          
          $nombre ="../../../data/Post-grado/estudiantes.json";
        
          if (!$nombre) {
              $archivo = fopen($nombre,"w");
              fclose($archivo);
              $archivo = fopen($nombre,"a+");
              fwrite($archivo, json_encode($_POST) . "\n");
              fclose($archivo);
          }else {
              $archivo = fopen($nombre,"a+");
              fwrite($archivo, json_encode($_POST) . "\n");
              fclose($archivo);
          }
            //echo'
            //  <div class="row">
            //    <div clas="col-3" style="background-color:green; color:white;">
            //        Se guardo esta madre
            //    </div>
            //  </div>            
            //';        
        
    }
?> 