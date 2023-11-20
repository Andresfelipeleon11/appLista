$(document).ready(function(){
  
    listarTareas();
   
    

    //crear tareas

    $(document).on('click', '#crearTarea', function(){

        let nombre_tarea = $('#nombre_tarea').val();
        let descripcion_tarea = $('#descripcion_tarea').val();
        let fecha_creacion = $('#fecha_creacion').val();

        if(nombre_tarea == ""){
            alert('Por favor ingrese el nombre de la tarea');
            return false
        }
        else if(descripcion_tarea == ""){
            alert('Por favor ingrese la descripción de la tarea');
            return false
        }
        else if(fecha_creacion == ""){
            alert('Por favor ingrese la fecha de creacion de la tarea');
            return false
        }
        
        else{
            $.ajax({
                url: '../controlador/crearTarea.php',
                method: 'POST',
                dataType: 'JSON',
                data: $('#FrmTarea').serialize(),
               }).done(function(json){
                console.log(json)
                alert('Tarea creada con exito');
                setInterval('window.location.reload()', 2000);
               }).fail(function(error){
                console.log('error'+error)
               })
        }

       
    })


    $(document).on('click', '#btnModificar', function(){

        let nombre_tareaM = $('#nombre_tareaM').val();
        let descripcion_tareaM = $('#descripcion_tareaM').val();
        let fecha_creacionM = $('#fecha_creacionM').val();

        if (nombre_tareaM == ""){
            alert('Por favor ingrese el nombre de la tarea');
            return false
        }

        else if(descripcion_tareaM == ""){
            alert('Por favor ingrese la descripción de la tarea');
            return false
        }

        else if(fecha_creacionM == ""){
            alert('Por favor ingrese la fecha de creacion de la tarea');
            return false
        }
        
        else{

            $.ajax({
                url: '../controlador/modificarTarea.php',
                method: 'POST',
                dataType: 'JSON',
                data: $('#FrmTareaAsignada').serialize(),
               }).done(function(json){
                   console.log(json);
                   alert('Tarea modificada con exito');
                   $("#modalModificar").modal('hide');
                   listarTareas();
              
               }).fail(function(error){
                console.log('error'+error)
               })
        }
    })


    $(document).on('click', '#btnEliminar', function(){
       
        $.ajax({
            url: '../controlador/eliminarTarea.php',
            type: 'POST',
            dataType: 'JSON',
            data: $('#FrmTareaELiminar').serialize(),
        }).done(function(){
            listarTareas()
            alert('Tarea desactivada con éxito');
           
    
        }).fail(function(error){
            console.log('error')
        })
    })
    

    //Lista tareas
    function listarTareas(){
        $.ajax({
            url: '../controlador/listarTareas.php',
            method: 'GET',
            dataType: 'JSON',
            data: null,
        }).done(function(json){
            console.log(json)
            var tabla;
            json.forEach(tarea => {
                tabla+= `
                <tr>
                <td>${tarea.nombre_tarea}</td>
                <td>${tarea.descripcion_tarea}</td>
                <td>${tarea.fecha_creacion}</td>
                <td id="estadoTarea" class="px-4 py-2">${tarea.estado}</td>
                <td class="px-4 py-2">
                <a  href='../vista/listarTarea.php' onclick='seleccionar(${JSON.stringify(tarea)})' class='btn btn-warning m-1' data-bs-toggle='modal' data-bs-target='#modalModificar'>Modificar</a> 
                <a href='../vista/listarTarea.php' onclick='seleccionar(${JSON.stringify(tarea)})' class='btn btn-danger m-1' data-bs-toggle='modal' data-bs-target='#modalEliminar'>Desactivar</a>
                </td>

                <style>
                #estadoTarea{
                  color: #6afc08 !important;
                  font-weight: bold;
                }
                </style>
                </tr>
                `
            });
            $("#contenidoTarea").html(tabla);
        }).fail(function(error){
            console.log('error')
        })
    }

    
  
   


})


function seleccionar(tarea){
    console.log(tarea)


    const {id_tarea, nombre_tarea, descripcion_tarea, fecha_creacion, estado} = tarea;

    //seleccionar datos a modificar.
    $('#id_tareaM').val(id_tarea)
    $('#nombre_tareaM').val(nombre_tarea)
    $('#descripcion_tareaM').val(descripcion_tarea)
    $('#fecha_creacionM').val(fecha_creacion)

    //selecionar datos a desactivar
    $('#tarea_idE').val(id_tarea)
    $('#nombreTareaE').text(nombre_tarea);
    $('#descripcionTareaE').text(descripcion_tarea);
    $('#fecha_creacionTareaE').text(fecha_creacion);
    $('#estadoTareaE').text(estado);
}




