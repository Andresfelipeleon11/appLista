<?php
include 'menu.php';

?>



<body>
<div class="d-flex flex-column justify-content-center align-items-center mt-5 font-bold">
    <h1 class="text-3xl mb-8 underline text-white mb-4">Lista de Tareas Inactivas</h1>
    
    <div class="table-responsive">
    <table id="tablaTareaInactiva" class="table align-middle">
    <thead>
        <tr>
            <th scope="col">Nombre de la Tarea</th>
            <th scope="col">Descripción de la Tarea</th>
            <th scope="col">Fecha de Creación</th>
            <th scope="col">Estado</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody id="ContenidoTareaInactiva">

    </tbody>
   </table>
    </div>
   
        
</div>


<div class="modal fade" id="modalModificar" tabindex="-1" aria-labelledby="modalModificarLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificar Estado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="FrmTareaActivar">
                    <div class="row">
                        <div class="col-12">
                            <input type="hidden" name="id_tareaM" id="id_tareaM" class="form-control" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label-color" style="font-weight: bold; margin-bottom: 12px;">Nombre de la tarea:</label>
                            <p name="nombre_tareaM" id="nombre_tareaM" style= "font-size:17px;"></p>
                        </div>

                        <div class="col-6">
                            <label class="form-label-color" style="font-weight: bold; margin-bottom: 12px;">Descripción de la tarea:</label>
                            <p name="descripcion_tareaM" id="descripcion_tareaM" style= "font-size:17px;"></p>
                        </div>

                        <div class="col-6">
                            <label class="form-label-color" style="font-weight: bold; margin-bottom: 12px;">Descripción de la tarea:</label>
                            <p name="fecha_creacionM" id="fecha_creacionM" style= "font-size:17px;"></p>
                        </div>
                       
                        <div class="col-6">
                        <label class="form-label-color" style="font-weight: bold; margin-bottom: 10px;">Estado:</label>
                        <p name="estadoM" id="estadoM" style="color:red; font-size:17px;"></p>
                        </div>
                       
                    </div>
                    </form>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-warning"  id="btnModificar">Modificar Estado</button>
                </div>
                </div>
            </div>
        </div>

</body>
<script src="../public/js/tareaInactiva.js"></script>
</html>


<style>
    body{
        background-color: #0F172A;
    }
    #tablaTareaInactiva {
        border-collapse: collapse;
        background-color: #4f46e5;
        margin-top: 20px;
    }
    #tablaTareaInactiva th, #tablaTareaInactiva td, #tablaTarea tr {
        border: 1px solid #0F172A;
        color: white;
       
    }

    #dropdownNavbarLink:hover{
        background-color: white;
        color: #4f46e5 !important;
        text-align: center;
    }

    #tablaTareaInactiva, tbody td, th{
        text-align: center;
    }

   
</style>