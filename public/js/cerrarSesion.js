$(document).ready(function(){
    $("#cerrarSesion").click(function(){
       $.ajax({
        url: '../controlador/cerrarSesion.php',
        method: 'POST',
        dataType: 'text',
        data: null,
       }).done(function(response){
        if(response.trim() == "Sesión cerrada"){
            sessionStorage.removeItem('nombre');
            window.location.href = "../index.php";
            alert('Haz cerrado la sesión');

         history.pushState(null, null, location.href);
            window.onpopstate = function () {
          history.go(1);
        };
            
        }
        else{
            alert("No se pudo cerrar la sesión");
        }
       }).fail(function(error){
        console.log('error'+error)
       })
    })
})


