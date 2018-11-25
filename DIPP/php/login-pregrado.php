<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href= "img/logo.ico">

    <title>Area de Pregrado</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    
    
</head>

<body style="padding-top:20 rem;">
    <?php include("html/header.html");?>
    <h3>Area</h3>
    <main role="main">
        <div id="margenes"> 
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-xl-8 col-lg-8 col-md-none col-sm-none" id="imglog">
                     </div>
                     
                     
                     <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="text-center" >
                           <form class="form-signin">
                             <img class="mb-4" src="img/puma.png" alt="" width="72" height="72">
                             <h1 class="h3 mb-3 font-weight-normal">Iniciar sesion:</h1>
                             <label for="inputEmail" class="sr-only">Numero de registro</label>
                             <input type="text" id="inputEmail" class="form-control" placeholder="Numero de cuenta" required autofocus>
                             <label for="inputPassword" class="sr-only">Contraseña</label>
                             <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                             <div class="checkbox mb-3">
                             <label>
                             <input type="checkbox" value="remember-me">Mantener sesion iniciada
                             </label>
                             </div>
                             <button class="btn btn-lg btn-primary btn-block color-boton" type="submit">Ingresar</button>
                           </form>
                        </div>
                     </div>
                 </div>
             </div>";
         </div>
    </main>
   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>