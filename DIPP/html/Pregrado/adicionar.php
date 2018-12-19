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
    <h3>Adicionar clases:</h3>
    
        <div class="row">
            <div class="col-3">
                <select class="form-control" id="slc-usuario">
                    <option value="">Esto lo trae el servidor</option>
                </select>
            </div>
            <div class="col-3">
                <select class="form-control" id="slc-usuario">
                        <option value="">Esto tambien</option>
                </select>
            </div>
            <div class="col-3">
                <select class="form-control" id="slc-usuario">
                        <option value="">Esto tambien x2</option>
                </select>
            </div>
        </div>
        <div class="row">
                <div class="col-3" style="margin-left:auto">    
                    <button class="btn btn-lg btn-primary btn-block color-boton" id="btn-cancelar" type="submit" >Adicionar aignatura</button>
                </div>
            </div>
        <div class="row">
            <div class="col-2" style=" background-image: url(../../../img/img-form.jpg);background-repeat: no-repeat; background-size:150px; height: 180px;">
            </div>
            <div class="col-6">
                <p><b>Cuenta:</b> 20161003263  </p>
                <p><b>Nombre:</b> Kevin Alexis Nieto</p>
                <p><b>Carrera:</b> Ingenieria en Sistemas</p>
            </div>
            <div class="col-4">
              <p><b>Centro:</b> Ciudad Universitaria</p>
              <p><b>Año:</b> 2018</p>
            </div>
        </div>
        <div class="row">
            <h6>ASIGNATURAS MATRICULADAS</h6>
        </div>
        <div class="row">
            <table border="10" class="col-12" style="border:none">
                
                <tr>
                    <th>Cod.</th>
                    <th>Asignatura</th> 
                    <th>Seccion</th>
                    <th>HI</th>
                    <th>HF</th>
                    <th>Dias</th>
                    <th>Edificio</th>
                    <th>Aula</th>
                    <th>UV</th>
                    <th>Periodo</th>
                    
                  </tr>
                  <tr>
                    <td>IS410</td>
                    <td>PROGRAMACION ORIENTADA A OBJETOS</td> 
                    <td>1500</td>
                    <td>1500</td>
                    <td>1600</td>
                    <td>LMMJV</td>
                    <td>B1</td>
                    <td>LAB 2(209)</td>
                    <td>5</td>
                    <td>3</td>
                    
                  </tr>
                  <tr>  
                        <td>IS410</td>
                        <td>PROGRAMACION ORIENTADA A OBJETOS</td> 
                        <td>1500</td>
                        <td>1500</td>
                        <td>1600</td>
                        <td>LMMJV</td>
                        <td>B1</td>
                        <td>LAB 2(209)</td>
                        <td>5</td>
                        <td>3</td>
                  </tr>
            </table>
        </div>
        

        
    </main>
    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>