<?php
include 'menu.php'

?>





<body>
<div class="d-flex flex-column justify-content-center align-items-center mt-5 font-bold">
    <h1 class="text-3xl mb-8 underline text-white mb-4 text-decoration-underline">Tus Tareas Completadas</h1>
    
    <div class="table-responsive">
    <table id="tablaTareaCompletada" class="table align-middle">
    <thead>
        <thead>
            <th class="px-4 py-2">Tarea Asignada</th>
            <th class="px-4 py-2">Descripción de la Tarea</th>
            <th class="px-4 py-2">Estado</th>
            <th class="px-4 py-2">Acción</th>
    </thead>
    </thead>
    <tbody id="contenidoTareaAsignadaCompletada">

    </tbody>
   </table>
    </div>
   
        
</div>


<div class="modal fade" id="asignarTareaPendiente" tabindex="-1" aria-labelledby="asignarTareaPendiente" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificar Estado Tarea</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="FrmTareaAsignadaCompletada">
                    <div class="row">
                        <div hidden class="col-12">
                            <input type="number" type="hidden" name="id_tareaUsuarioM" id="id_tareaUsuarioM" class="form-control" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label-color" style="font-weight: bold; margin-bottom: 12px;">Nombre de la tarea:</label>
                            <p name="nombre_tareaM" id="nombre_tareaM"></p>
                        </div>

                        <div class="col-6">
                        <label class="form-label-color" style="font-weight: bold; margin-bottom: 10px;">Usuario Encargado:</label>
                        <p name="usuarioM" id="usuarioM"></p>
                        </div>

                        <div class="col-6">
                        <label class="form-label-color" style="font-weight: bold; margin-bottom: 10px;">Descripción de la tarea:</label>
                        <p name="descripcionM" id="descripcionM"></p>
                        </div>
                       
                        <div class="col-6">
                        <label class="form-label-color" style="font-weight: bold; margin-bottom: 10px;">Estado:</label>
                        <p name="estadoM" id="estadoM" style="color:#0aa834; font-weight: bold"></p>
                        </div>
                        <h4>¿Estas seguro de cambiar el estado de tu tarea?</h4>
                    </div>
                    </form>
                
                </div>

             
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal" id="btnAsignarTareaPendiente">Pendiente</button>
                </div>
                </div>
            </div>
            </form>
        </div>

</body>
<script src="../public/js/tareaUsuarioCompĺetada.js"></script>


</html>


<style>
    body{
        background-color: #0F172A;
    }
    #tablaTareaCompletada {
        border-collapse: collapse;
        background-color: #4f46e5;
        margin-top: 20px;
    }
    #tablaTareaCompletada th, #tablaTareaCompletada td, #tablaTareaCompletada tr {
        border: 1px solid #0F172A;
        color: white;
       
    }

    #dropdownNavbarLink:hover{
        background-color: white;
        color: #4f46e5 !important;
        text-align: center;
    }

    #tablaTareaCompletada, tbody td, th{
        text-align: center;
    }


   
   
</style>