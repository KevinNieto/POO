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

    <title>Area de Pregrado</title>

    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/custom.css" rel="stylesheet">
    <link href="../../Pregrado/custom-estudiantes.css" rel="stylesheet">
    
</head>
<body style="padding: 7rem;">
<header>
        <!--INICIO DE LA BARRA DE NAVEGACION-->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <a class="navbar-brand" id="el-logo" href="" >DIPP</a>
       
    
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
                    <h6> <?php echo $_SESSION["usuario"];  ?></h6>
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
    <h3>Bienvenido a Area de Personal Administrativo</h3>
        <div class="container-fluid" style="margin-left:100px;">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-none col-sm-none" id="estilos-cuadros"><a href="creacion-maestro.php">Crear Maestro</a></div>
                <div class="col-xl-5 col-lg-5 col-md-none col-sm-none" id="estilos-cuadros"><a href="creacion-programa.php">Crear Programa de estudio</a></div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-none col-sm-none" id="estilos-cuadros" ><a href="creacion-estudiante.php">Crear Estudiante</a></div>

            </div>
            
        </div>
    </main>
    <script src="../../../js/jquery-3.3.1.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
</body>