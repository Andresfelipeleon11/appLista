$(document).ready(function(){

    listarTareasInactivas()


    $(document).on('click', '#btnModificar', function(){
        let respuesta = confirm("¿Desea Activar la Tarea?")

        if(respuesta == true){
            $.ajax({
                url: '../controlador/modificarEstadoTareaInactiva.php',
                method: 'POST', 
                dataType: 'JSON',
                data: $('#FrmTareaActivar').serialize(),
            }).done(function(json){
                alert('Se activo la Tarea');
                listarTareasInactivas();
                console.log(json)
                $('#modalModificar').modal('hide');

            }).fail(function(error){
                console.log('error al modificar el estado'+error)
            })
        }
        else{
            alert('No se activo la Tarea')
        }
    })

    function listarTareasInactivas(){
        $.ajax({
            url: '../controlador/listarTareasInactivas.php',
            method: 'GET',
            dataType: 'JSON',
            data: null,
        }).done(function(json){
            var tabla;
            json.forEach(tarea=>{
                tabla += `
                <tr>
                <td>${tarea.nombre_tarea}</td>
                <td class="px-4 py-2">${tarea.descripcion_tarea}</td>
                <td>${tarea.fecha_creacion}</td>
                <td id="estadoTarea">${tarea.estado}</td>
                <td class="px-4 py-2">
                <a href='../vista/listarTarea.php' onclick='seleccionar(${JSON.stringify(tarea)})' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#modalModificar'>Modificar Estado</a> 
                </td>
                <style>
                #estadoTarea{
                  color: #bf0b0b !important;
                  font-weight: bold;
                }
                </style>
                </tr>
                `
            })
            $('#ContenidoTareaInactiva').html(tabla)
        }).fail(function(error){
            console.log('error'+error)
        })
    }

  
})


function seleccionar(tarea){

    const {id_tarea, nombre_tarea, descripcion_tarea, estado, fecha_creacion} = tarea;

       
        $('#id_tareaM').val(id_tarea);
        $('#nombre_tareaM').text(nombre_tarea);
        $('#descripcion_tareaM').text(descripcion_tarea)
        $('#estadoM').text(estado)
        $('#fecha_creacionM').text(fecha_creacion)


        console.log(id_tarea)
        console.log(descripcion_tarea)
}