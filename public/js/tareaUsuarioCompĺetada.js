
$(document).ready(function(){

    listarAsignarTareaCompletadas();


    function listarAsignarTareaCompletadas() {
        $.ajax({
          url: "../controlador/listarTareaCompletadaAsignada.php",
          method: "GET",
          dataType: "JSON",
          data: null,
        })
          .done(function (json) {
            console.log(json);
            var tabla;
            json.forEach((tarea) => {
              tabla += `<tr>

                    <td>${tarea.nombre_tarea}</td>
                    <td>${tarea.descripcion_tarea}</td>
                    <td id="estadoTarea">${tarea.estado_tarea}</td>
                    <td>
                    <a href='../vista/listarTareaAsignadaCompletadas.php' onclick='selecionarModificar(${JSON.stringify(
                      tarea
                    )})' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#asignarTareaPendiente'>Modificar Estado</a>
    
                   
                    </td>
                    <style>
                    #estadoTarea{
                      color: #6afc08 !important;
                      font-weight: bold;
                    }
                    </style>
                    </tr>
            `;
            });
            $("#contenidoTareaAsignadaCompletada").html(tabla);
          })
          .fail(function (error) {
            console.log("error" + error);
          });
      }




      $(document).on('click', '#btnAsignarTareaPendiente', function(){
        let respuesta = confirm("¿Desea Modificar La Tarea como pendiente?")

        if(respuesta == true){
            $.ajax({
                url: '../controlador/modificarEstadoAsignarTareaPendiente.php',
                method: 'POST', 
                dataType: 'JSON',
                data: $('#FrmTareaAsignadaCompletada').serialize(),
            }).done(function(json){
                alert('El estado de la tarea asignada, se ha modificado a pendiente.')
                listarAsignarTareaCompletadas();
                console.log(json);
                
               

            }).fail(function(error){
                console.log('error al modificar el estado'+error)
            })
        }
        else{
            alert('Perfecto, no quieres modificar su estado.')
        }
    })

})

function selecionarModificar(tarea){

    const {id_tarea_usuario, nombre_tarea, descripcion_tarea, nombre_usuario, estado_tarea} = tarea;
    
    $('#id_tareaUsuarioM').val(id_tarea_usuario);
    $('#nombre_tareaM').text(nombre_tarea);
    $('#descripcionM').text(descripcion_tarea);
    $('#usuarioM').text(nombre_usuario);
    $('#estadoM').text(estado_tarea);
}