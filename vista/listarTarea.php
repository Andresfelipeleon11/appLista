<?php


session_start();

if(!isset($_SESSION['nombre_usuario'])){
   header("Location: ../index.php");
   session_destroy();
   exit;
}



// Check if the session is active
if(isset($_SESSION['nombre_usuario'])){
    // Include the file that lists the tasks
   include_once 'listarTarea.php';
}


include 'menu.php';
?>


<!DOCTYPE html>
<body>



<div class="d-flex flex-column justify-content-center align-items-center mt-5 font-bold">
    <h1 class="text-3xl mb-8 underline text-white mb-4 text-decoration-underline">Lista de Tareas</h1>
    
    
    <div class="table-responsive">
    <table id="tablaTarea" class="table align-middle">
    <thead>
        <tr>
            <th scope="col">Nombre de la Tarea</th>
            <th scope="col">Descripción de la Tarea</th>
            <th scope="col">Fecha de Creación</th>
            <th scope="col">Estado</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody id="contenidoTarea">

    </tbody>
   </table>
    </div>
   

   
        
</div>




<div class="modal fade" id="modalModificar" tabindex="-1" aria-labelledby="modalModificarLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificar Tarea</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="FrmTareaAsignada">
                    <div class="row">
                        <div class="col-12">
                            <input type="hidden" name="id_tareaM" id="id_tareaM" class="form-control" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label-color">Nombre de la tarea:</label>
                            <input type="text" name="nombre_tareaM" id="nombre_tareaM" class="form-control">
                        </div>
                        <div class="col-6">
                            <label class="form-label-color">Descripción de la tarea:</label>
                            <textarea type="text" name="descripcion_tareaM" id="descripcion_tareaM" class="form-control"></textarea>
                        </div>

                        <div class="col-6">
                        <input type="date" name="fecha_creacionM" id="fecha_creacionM" class="form-control">
                        </div>
                       
                    </div>
                    </form>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-warning"  id="btnModificar">Modificar</button>
                </div>
                </div>
            </div>
        </div>




        <!--Modal Eliminar-->
        <div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Desactivar Tarea</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form id="FrmTareaELiminar">
                    <div class="row">
                        <div class="col-6" hidden>
                            <label class="form-label-color">Id</label>
                            <input type="number" name="tarea_idE" id="tarea_idE" class="form-control">
                        </div>

                        <div class="col-6">
                            <label class="form-label-color">Nombre de la Tarea</label>
                            <p  name="nombreTareaE" id="nombreTareaE"></p>
                        </div>

                        <div class="col-6" >
                            <label class="form-label-color">Descripción de la Tarea</label>
                            <p  name="descripcionTareaE" id="descripcionTareaE"></p>
                        </div>

                        <div class="col-6" >
                            <label class="form-label-color">Descripción de la Tarea</label>
                            <p  name="fecha_creacionTareaE" id="fecha_creacionTareaE"></p>
                        </div>

                        <div class="col-6" >
                            <label class="form-label-color">Estado de la Tarea</label>
                            <p  name="estadoTareaE" id="estadoTareaE" style="color: #0aa834;"></p>
                        </div>
                    </div>
                    <h4>¿Desea desactivar la tarea?</h4>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btnEliminar">Desactivar</button>
                </div>
                </div>
            </div>
            </form>
        </div>

</body>
<script src="../public/js/tarea.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>



</html>


<style>
    body{
        background-color: #0F172A;
    }
    #tablaTarea {
        border-collapse: collapse;
        background-color: #4f46e5;
        margin-top: 20px;
    }
    #tablaTarea th, #tablaTarea td, #tablaTarea tr {
        border: 1px solid #0F172A;
        color: white;
       
    }

    #dropdownNavbarLink:hover{
        background-color: white;
        color: #4f46e5 !important;
        text-align: center;
    }


    tbody td, th{
        text-align: center;
    }


   
</style>



<script>
      history.pushState(null, null, location.href);
            window.onpopstate = function () {
            history.go(1);
            }
</script>




