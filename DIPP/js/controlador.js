function acceso(cuenta, contraseña ){
    if(cuenta = '20161003263' || contraseña == 'admin')
    {
       
    window.location.href = "../Pregrado/Estudiantes-main.html";
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
$("#btn-cancelar").click(function(){
    var borrar = confirm("Estas seguro que deseas cancelar esta clase");
    if(!borrar)self.close();
})