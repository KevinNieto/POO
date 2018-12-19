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
    <form method="POST"action="">
            <h1>Matricula</h1>
            <input type="text" class="form-control" name="codigo" style="margin-bottom: 10px;" placeholder="Codigo" id="">
            <input type="text" id="inputCuenta formulario" class="form-control" name="clase" placeholder="Asignatura" required autofocus >
            <input type="text" id="inputCuenta formulario" class="form-control" name="seccion" placeholder="Seccion" required autofocus style="margin-bottom: 10px;">
            <input type="text" id="inputCuenta formulario" class="form-control" name="horaEntrada" placeholder="HI" required autofocus style="margin-bottom: 10px;">
            <input type="text" id="inputCuenta formulario" class="form-control" name="horaSalida" placeholder="HF" required autofocus style="margin-bottom: 10px;">
            <input type="text" id="inputCuenta formulario" class="form-control" name="dias" placeholder="Dias" required autofocus style="margin-bottom: 10px;">
            <input type="text" id="inputCuenta formulario" class="form-control" name="eficio" placeholder="Edificio" required autofocus style="margin-bottom: 10px;">
            <input type="text" id="inputCuenta formulario" class="form-control" name="aula" placeholder="Aula" required autofocus style="margin-bottom: 10px;">
            <input type="text" id="inputCuenta formulario" class="form-control" name="uv" placeholder="UV" required autofocus style="margin-bottom: 10px;">
            <input type="text" id="inputCuenta formulario" class="form-control" name="periodo" placeholder="periodo" required autofocus style="margin-bottom: 10px;">
            
            <button class="class-6 btn btn-lg btn-primary btn-block color-boton" id="btn-login" type="submit" data-toggle="modal" data-target="#exampleModal" name="envio">Enviar</button>
          </form>

        
    </main>
    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>
<script>
<?php 
    if (isset($_POST["envio"])){ 
        $archivo = fopen("../../../data/usuarios.json","a+");
        fwrite($archivo, json_encode($registrar)."\n");
        fclose($archivo);


            $nombre ='../../data/JuanPerez.json';
        
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