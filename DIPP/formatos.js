$("#btn-login").click(function(){
            $.ajax({
                url:"../ajax/login.php",
                data:"usuario="+$("#usuario").val() + "&password="+$("#password").val(),
                dataType:"json",
                method:"POST",
                success:function(respuesta){
                    console.log(respuesta);
                    if (respuesta.estatus == 1){
                        switch (tipoUsuario) {
                            case 'dipp':
                                window.location.href = "../html/Adminitracion/DIPP/main-dipp.php"; 
                                break;
                        
                            default:
                                break;
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