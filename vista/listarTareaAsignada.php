<?php

include_once 'menu.php';

?>

<!DOCTYPE html>

<body>


    <div class="d-flex flex-column justify-content-center align-items-center mt-5 font-bold">
        <h1 class="text-3xl mb-4 underline text-white text-decoration-underline">Tus Tareas Asignadas</h1>

        <div class="table-responsive">
        <table id="tablaTareaAsignada" class="table align-middle">
            <thead>
                <tr>
                    <th scope="col">Tarea Asignada</th>
                    <th scope="col">Descripción de la Tarea</th>
                    <th scope="col">Estado</th>
                    <th scope="col" >Acción</th>
                </tr>
            </thead>
            <tbody id="contenidoTareaAsignada">

            </tbody>
        </table>
        </div>
        

    </div>





    <div class="modal fade" id="modalModificar" tabindex="-1" aria-labelledby="modalModificarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificar Tarea Asignada</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="FrmTareaAsignada">
                        <div class="row">
                            <div class="col-12">
                                <input hidden type="number" name="idTareaUsuarioM" id="idTareaUsuarioM" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 mb-4">
                                <label class="form-label-color">Tarea asginada:</label>
                                <select class="inline-flex items-center justify-center  p-2 ml-2 rounded text-indigo-600" name="selNombreTareaM" id="selNombreTareaM">

                                </select>
                            </div>
                            <div class="col-8 mb-4">
                                <label class="form-label-color">Descripción de la tarea:</label>
                                <select class="inline-flex items-center justify-center  p-2 ml-2 rounded text-indigo-600" name="selDescripcionTareaM" id="selDescripcionTareaM">


                                </select>
                            </div>
                            <div class="col-8">
                                <label class="form-label-color">Nombre de usuario a cargo:</label>
                                <select class="inline-flex items-center justify-center  p-2 ml-2 rounded text-indigo-600" name="selUsuarioM" id="selUsuarioM">

                                </select>
                            </div>



                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                </div>
            </div>
            </form>
        </div>
    </div>









    <div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Tarea Asignada</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="FrmTareaAsignadaDesactivar">
                        <div class="row">
                            <div hidden class="col-12">
                                <label class="form-label-color">Id</label>
                                <input type="number" name="idTareaUsuarioE" id="idTareaUsuarioE" class="form-control">
                            </div>

                            <div class="col-6">
                                <label class="form-label-color" style="font-weight: bold;">Nombre de la tarea:</label>
                                <p name="nombreTareaE" id="nombreTareaE"></p>
                            </div>

                            <div class="col-6">
                                <label class="form-label-color" style="font-weight: bold;">Descripción de la tarea:</label>
                                <p name="descripcionTareaE" id="descripcionTareaE"></p>
                            </div>

                            <div class="col-6">
                                <label class="form-label-color" style="font-weight: bold;">Usuario a cargo:</label>
                                <p name="usuarioTareaE" id="usuarioTareaE"></p>
                            </div>

                            <div class="col-6">
                                <label class="form-label-color" style="font-weight: bold;">Estado de la tarea:</label>
                                <p name="estadoTareaE" id="estadoTareaE" style="color:#ed7e0e; font-weight: bold"></p>
                            </div>
                        </div>
                        <h4>¿Estas seguro de cambiar el estado de tu tarea?</h4>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="btnEliminar">completar</button>
                </div>
            </div>
        </div>
    </div>

</body>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="../public/js/tareaUsuario.js"></script>

</html>


<style>
    body {
        background-color: #0F172A;
    }

    #tablaTareaAsignada {
        border-collapse: collapse;
        background-color: #4f46e5;
        margin-top: 20px;
    
        
    }

    #tablaTareaAsignada th,
    #tablaTareaAsignada td,
    #tablaTarea tr {
        border: 1px solid #0F172A;
        color: white;

    }

    #dropdownNavbarLink:hover {
        background-color: white;
        color: #4f46e5 !important;
        text-align: center;
    }

    tbody td, th{
        text-align: center;

        }
    
</style>