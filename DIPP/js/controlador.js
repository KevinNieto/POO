function acceso(cuenta, contraseña ){
    if(cuenta = '20161003263' || contraseña == 'admin')
    {
       
       window.open("../Pregrado/Estudiantes-main.html");
       window.close();
    }
    else
    {
        alert("Contraseña incorrecta");
    }
}

$("#btn-login").click(function(){
    var acc =$("#inputCuenta").val();
    var pass =$("#inputPassword").val();
    acceso(acc, pass);
})