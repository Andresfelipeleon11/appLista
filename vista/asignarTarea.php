<?php
include 'menu.php';
?>

<!DOCTYPE html>

<body>
<div class="container">
    <div class="row justify-content-center justify-content-md-center" style="height: 100vh">
        <div class="col-lg-6 col-sm-10  col-md-8">
            <div class="card mt-5  d-flex align-items-center ">
                <div class="card-body">
                    <h1 class="card-title text-white text-center mb-4 text-decoration-underline">Asignar Tareas</h1>
                    <form id="FrmAsignarTarea">
                        <div class="mb-3">
                            <label for="selNombreTarea" class="form-label">Nombre de la Tarea a Asignar:</label>
                            <select class="form-select" name="selNombreTarea" id="selNombreTarea">
                                <option value="Seleccione el nombre de la Tarea">Seleccione el nombre de la Tarea</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="selDescripcionTarea" class="form-label">Descripción de la tarea:</label>
                            <div class="p-2 bg-white rounded">
                                <p class="mb-0 text-primary fw-bold fs-x" id="contenidoDescripcion"></p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="selUsuario" class="form-label">Nombre del Usuario:</label>
                            <select class="form-select" name="selUsuario" id="selUsuario">
                                <option value="Seleccione el usuario" selected>Seleccione el usuario</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-primary" id="asignarTarea">Asignar Tarea</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="../public/js/tareaUsuario.js"></script>
</body>
</html>

<style>
    label{
        color:white;
        font-weight: bold;
        font-size: 18px;
    }

    .card{
        background-color: #4f46e5;
        border-radius: 10px;
        margin-top: 28px;
        padding-top: 8px;
    }

    .card-title{
        font-weight: bold;
    }

    #asignarTarea:hover{
            color:#4f46e5 !important;
            font-weight: bold !important;
            background-color: white !important;
        }

        #asignarTarea{
            background-color: #4f46e5;
            font-weight: bold;
            color: white;
            border: 2px white solid;
            border-radius: 8px;
        }

    .form-control{
            color: black !important;
        }

    
</style>
