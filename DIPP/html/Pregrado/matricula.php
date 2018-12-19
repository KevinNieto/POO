<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href= "../../img/logo.ico">

    <title>Matricula</title>

    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/custom.css">
    <link href="custom-estudiantes.css" rel="stylesheet">
  
    
  
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
              <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../img/tuerca.png" width="30"></a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
                  <div class="row" style="padding:2px;">
                  <div class="col-4">
                    <img src="../../img/user.png" width="50">
                  </div>
                  <div class="col-8">
                    <h6>Nombre de la persona</h6>
                  </div>
              </div>
    
                <a class="dropdown-item" href="">Cambiar Contraseña</a>
    
                <a class="dropdown-item" href="">Cerrar Session</a>
              </div>
            </li>
          </ul>
          </div>  
        </div>
      </nav>
    </header>
    <main>
    <h3>Matricula de Pregrado</h3>
        <div class="container-fluid">
            <div class="row" style="margin-left:100px;">
                <div class="col-xl-3 col-lg-3 col-md-none col-sm-none"  id="estilos-cuadros" ><a href="matricula/adicionar.html">Adicionar asignatura</a></div>
                <div class="col-xl-3 col-lg-3 col-md-none col-sm-none"  id="estilos-cuadros"><a href="matricula/cancelar.html">Cancelar asignatura</a></div>
                <div class="col-xl-3 col-lg-3 col-md-none col-sm-none"  id="estilos-cuadros"><a href="matricula/lista-canceladas.html">Listado de asignaturas canceladas</a></div>
            </div>

            <div class="row" style="margin-left:100px;">
                <div class="col-xl-3 col-lg-3 col-md-none col-sm-none"  id="estilos-cuadros" ><a href="matricula/forma03.html">Forma 03</a></div>
                <div class="col-xl-3 col-lg-3 col-md-none col-sm-none"  id="estilos-cuadros"><a href="matricula/lista-espera.html">Lista de asignaturas en lista de espera</a></div>
                <div class="col-xl-3 col-lg-3 col-md-none col-sm-none"  id="estilos-cuadros"><a href="matricula/estado-cuenta.html">Estado de cuenta</a></div>
            </div>  
          </div>
    </main>
    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>
