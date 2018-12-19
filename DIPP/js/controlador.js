//$("#btn-login").click(function(){
//    var acc =$("#inputCuenta").val();
//    var pass =$("#inputPassword").val();
//    var tipo =$("#tip").val();
//    console.log("Esto es lo que recibe de parametro:  " + tipo);
//    acceso( acc, pass, tipo );
//})
//
////LOGIN DE PREGRADO
//function acceso( cuenta , contraseña, direccion ){
//   switch (direccion) {
//        case "pregrado":
//                if(cuenta = '20161003263' || contraseña == 'admin')
//                {
//                window.location.href = "html/Pregrado/Estudiantes-main.html";
//                 }
//                else
//                {
//                alert("Contraseña incorrecta");
//                }
//                console.log("Logro entrar al switch");
//            break;
//
//        case "postgrado":
//            
//            if(cuenta = '20161003263' || contraseña == 'admin')
//            {
//            window.location.href = "html/Postgrado/post/index-est-pre.html";
//            }
//            else
//            {
//                alert("Contraseña incorrecta");
//            }
//        break;
//        case "profesorPostgrado":
//        if(cuenta = '20161003263' || contraseña == 'admin')
//        {
//        window.location.href = "../Pregrado/Estudiantes-main.html";
//         }
//        else
//        {
//        alert("Contraseña incorrecta");
//        }
//        console.log("Logro entrar al switch");
//        break;
//
//        case "profesorPregrado":
//        
//        if(cuenta = '20161003263' || contraseña == 'admin')
//        {
//        window.location.href = "../Postgrado/post/index-est-pre.html";
//        }
//        else
//        {
//            alert("Contraseña incorrecta");
//        }
//        break; 
//        case "coordinadorPre":
//
//        if(cuenta = '20161003263' || contraseña == 'admin')
//        {
//        window.location.href = "html/Administracion/Coordinador-de-Carrera/main-coordinadores.html";
//        }
//        else
//        {
//            alert("Contraseña incorrecta");
//            }
//        break;
//        case "coordinadorPost":
//
//        if(cuenta = '20161003263' || contraseña == 'admin')
//        {
//        window.location.href = "html/Administracion/Coordinador-de-post/main-coordinadores.html";
//        }
//        else
//        {
//            alert("Contraseña incorrecta");
//        }
//        break;
//
//        case "dipp":
//
//            if(cuenta = '20161003263' || contraseña == 'admin')
//            {
//                window.location.href = "html/Administracion/DIPP/main-dipp.html";
//            }
//            else
//            {
//               alert("Contraseña incorrecta");
//            }
//        break;
//        
//        default:
//            alert("USUARIO INVALIDO");
//           break;
//        }
//
//
//   }

$("#btn-login").click(function(){
    $.ajax({
        url:"ajax/login.php",
        data:"usuario="+$("#Cuenta").val() + "&password="+$("#Password").val(),
        dataType:"json",
        method:"POST",
    
        success:function(respuesta){
            alert("Entra en la funcion");
            console.log(respuesta);
            if (respuesta.estatus == 1){
                if (respuesta.tipoUsuario=="coordinador"){
                        window.location.href = "html/Administracion/Coordinador-de-carrera/main-coordinadores.php";
                }else if (respuesta.tipoUsuario=="dipp") {
                    window.location.href = "html/Administracion/DIPP/main-dipp.php";
                }
                
                //if (respuesta.tipoUsuario=="cajero")
                //    window.location.href = "cajero.php";//redireccionar
                //else if (respuesta.tipoUsuario=="admin")
                //    window.location.href = "admin.php";//redireccionar
            }else 
                alert("Credenciales invalidas");
        },
        error:function(error){
            console.error(error);
        }
    });
});

//Encontrale la logica