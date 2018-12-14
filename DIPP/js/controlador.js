function acceso( cuenta , contraseña, direccion ){
   switch (direccion) {
        case "pregrado":
                if(cuenta = '20161003263' || contraseña == 'admin')
                {
                window.location.href = "../Pregrado/Estudiantes-main.html";
                 }
                else
                {
                alert("Contraseña incorrecta");
                }
                console.log("Logro entrar al switch");
            break;

        case "postgrado":
            
            if(cuenta = '20161003263' || contraseña == 'admin')
            {
            window.location.href = "../Postgrado/post/index-est-pre.html";
            }
            else
            {
                alert("Contraseña incorrecta");
            }
        break;
      

        default:
            alert("USUARIO INVALIDO");
           break;
   }
}


$("#btn-login").click(function(){
    var acc =$("#inputCuenta").val();
    var pass =$("#inputPassword").val();
    var tipo =$("#tip").val();
    console.log("Esto es lo que recibe de parametro:  " + tipo);
    acceso( acc, pass, tipo );
})


