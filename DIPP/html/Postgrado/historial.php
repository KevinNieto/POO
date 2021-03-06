<?php 
    session_start();  
    if (!isset($_SESSION["usuario"]))
        header("Location: ../../no-autorizado.html");//Redireccion con PHP
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href= "../../img/logo.ico">

    <title>Matricula</title>

    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/custom.css" rel="stylesheet">
    <link href="custom-estudiantes.css" rel="stylesheet">

    
</head>
<body style="padding: 7rem;">
    <header>
        <!--INICIO DE LA BARRA DE NAVEGACION-->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <a class="navbar-brand" id="el-logo" href="Estudiantes-main.php" >DIPP</a>
       
    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
       <div class="aladerecha">
          <ul class="navbar-nav mr-auto">
            
    <!--DROPDOWN DE USUARIO--> 
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../img/tuerca.png" width="30"></a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
                  <div class="row" style="padding:2px;">
                  <div class="col-4">
                    <img src="../../img/user.png" width="50">
                  </div>
                  <div class="col-8">
                    <h6><?php echo $_SESSION["usuario"];  ?></h6>
                  </div>
              </div>
    
                <a class="dropdown-item" href="../../ajax/cerrar-sesion.php">Cerrar Session</a>
              </div>
            </li>
          </ul>
          </div>  
        </div>
      </nav>
    </header>
    <main>
    <h3>HISTORIAL ACADEMICO</h3>
      <div style="background-color:rgb(255, 255, 255, .9)"> 
        <div class="row" style="margin:25px;">
            <h5>Informacion General</h5>
        </div>
      <div id="informacion">
       
      </div>
        <div class="row" style="margin: 25px;">
            <h5>Historial</h5>
        </div>
        <div class="row" style="margin: 20px;">
            <table border="0" class="col-12" style="border:none" id="cuadro">
                
            </table>
        </div>
    </div>  
        

        
    </main>
    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>
<script>
  $(document).ready(function(){
	console.log("El DOM ha sido cargado, debe cargar todos los tweets e imprimirlos tal y como lo muestrael html estatico");
	///Peticion AJAX para obtener usuarios
	$.ajax({
		url:"../../ajax/informacion.php",
		method:"GET",
		dataType:"json",
		success:function(respuesta){
			console.log(respuesta);
			$("#informacion").append(`<div class="row">
                                        <div class="col-2" style=" background-image: url("${respuesta[0].imagen}");background-repeat: no-repeat; background-size:150px; height: 180px;">
                                        </div>
                                        <div class="col-6">
                                        <p><b>Cuenta:</b> ${respuesta[0].cuenta} </p>
                                        <p><b>Nombre:</b> ${respuesta[0].nombre}</p>
                                        <p><b>Carrera:</b> ${respuesta[0].carrera}</p>
                                        </div>
                                        <div class="col-4">
                                          <p><b>Centro:</b> ${respuesta[0].centro}</p>
                                          <p><b>Año:</b>2018</p>
                                        </div>
                                     </div>`);
		},
		error:function(error){
			console.log(error);
    }
    
    });
    $.ajax({
		url:"../../ajax/historial.php",
		method:"GET",
		dataType:"json",
		success:function(respuesta){
			console.log(respuesta);
			$("#cuadro").append(` <tr>
                              <th>Cod.</th>
                              <th>Asignatura</th> 
                              <th>UV</th>
                              <th>Seccion</th>
                              <th>Año</th>
                              <th>Periodo</th>
                              <th>Calificacion</th>
                              <th>OBS</th>
                          </tr>`);
            for(var i=0; i<respuesta.length;i++)
				$("#cuadro").append(`<tr>
                                          <td>${respuesta[i].codigo}</td>
                                          <td>${respuesta[i].clase}</td> 
                                          <td>${respuesta[i].uv}</td>
                                          <td>${respuesta[i].seccion}</td>
                                          <td>2018</td>
                                          <td>${respuesta[i].periodo}</td>
                                          <td>${respuesta[i].calificacion}</td>
                                          <td>${respuesta[i].obs}</td>  
                                        </tr>`);
		
		},
		error:function(error){
			console.log(error);
    }
    
    });
});
</script>