$(document).ready(function(){
    listarUsuario();



    $(document).on('click', '#btnSesion', function(){

        let nombre_usuario = $('#nombre_usuario').val()
        let contrasena = $('#contrasena').val();
        

        if(nombre_usuario == ""){
            alert('Por favor ingrese su nombre');
            return false;
        }

        else if(contrasena == ""){
            alert('Por favor ingrese su contrasena');
            return false;
        }

      else{
        $.ajax({
            url: './controlador/crearSesion.php',
            method: 'POST',
            dataType: 'JSON',
            data: $('#FrmLogin').serialize(),
           }).done(function(json){

            history.pushState(null, null, location.href);
            window.onpopstate = function () {
            history.go(1);
            };
            console.log(json)
            if(json != 0){
               let usuarioActivo = sessionStorage.setItem('nombre',json[0].nombre_usuario);
                
             
                json.forEach(usuario => {
                    
                    window.location.href = 'vista/listarTarea.php'
                    alert(`Bienvenido ${usuario.nombre_usuario}`)
                });
              
            }
            else{
               alert('Usuario verifica tus datos')
               return false;
            }
           }).fail(function(error){
            console.log(error)
           })
      }
    })
    function listarUsuario(){
        $.ajax({
            url: './controlador/listarUsuario.php',
            method: 'GET',
            dataType: 'JSON',
            data: null,
        }).done(function(json){
            console.log(json)
        }).fail(function(error){
            console.log('hubo un error'+error)
        })
    }


    $(document).on('click', '#btnRegistrar', function(){
        let nombre_usuario = $('#nombre_usuario').val()
        let correoElectronico = $('#correo_usuario').val()
        let contrasena = $('#contrasena_usuario').val();
        let confirmacionContrasena = $('#contrasena_confirmacion').val();

        if(nombre_usuario == ''){
            alert('por favor ingrese su nombre');
            return false;
        }

        else if(correoElectronico== ""){
            alert('Por favor ingrese su correo');
            return false;
        }

        else if(contrasena == ""){
            alert('Por favor ingrese su contrasena');
            return false;
        }
        
        else if(confirmacionContrasena == ""){
            alert('Por favor confirme su contrasena');
            return false;
        }

        else if(contrasena != confirmacionContrasena){
            alert('Las contrasenas no coinciden');
            return false;
        }

        else{
            $.ajax({
                url: './controlador/registrarUsuario.php',
                method: 'POST',
                dataType: 'JSON',
                data: $('#FrmRegistro').serialize(),
            }).done(function(json){
                console.log(json)
                console.log('se registro correctamente el usuario')
            }).fail(function(error){
                console.log('error al registrar el usuario'+error)
            })  
        }
      
    })



})

