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
                    <h6> <?php echo $_COOKIE["tipoUsuario"]."<br>".$_COOKIE["usuario"];?></h6>
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
    <h3>ESTUDIANTES DE INGENIERIA EN SISTEMAS</h3>
    
        

        <div class="row" style="margin-top: 15px;">
            <table border="10" class="col-12" style="border:none">
                
                <tr>
                    <th>Numero de Cuenta</th>
                    <th>Nombre</th> 
                    <th>Correo </th>                    
                </tr>
                <tr>
                    <td>20161003263</td>
                    <td>Kevin Alexis Nieto Flores</td> 
                    <td>nieto.kevin@gmail.com</td>                    
                </tr>
                 
                  
            </table>
        </div>
  
        

        
    </main>
    <script src="../../../js/jquery-3.3.1.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
</body>