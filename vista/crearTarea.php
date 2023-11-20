<?php
include 'menu.php';
?>

<!DOCTYPE html>



<body>
    <div class="container">
        <div class="row justify-content-center justify-content-md-center" style="height: 100vh">
            <div class="col-lg-6 col-sm-10  col-md-8">
                <div class="card mt-5  d-flex align-items-center">
                    <div class="card-body">
                        <h1 class="card-title text-white text-center mb-4 text-decoration-underline">Crea una nueva tarea</h1>
                        <form id="FrmTarea">
                            <div class="form-group mb-3">
                                <label for="nombre_tarea">Nombre:</label>
                                <input type="text" id="nombre_tarea" name="nombre_tarea" class="form-control" placeholder="Ingrese el nombre de la tarea.">
                            </div>
                            <div class="form-group mb-3">
                                <label for="descripcion_tarea">Descripción:</label>
                                <textarea id="descripcion_tarea" name="descripcion_tarea" class="form-control" placeholder="Ingrese la descripción de la tarea."></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label for="fecha_creacion">Fecha de creación:</label>
                                <input type="date" id="fecha_creacion" name="fecha_creacion" class="form-control">
                            </div>
                            <button type="button" class="btn btn-primary" id="crearTarea">Crear Tarea</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../public/js/tarea.js"></script>
</body>

</html>

<style>
    label {
        color: white;
        font-weight: bold;
        font-size: 18px;
    }

    .card {
        background-color: #4f46e5;
        border-radius: 10px;
        margin-top: 38px;
    }

    #crearTarea:hover {
        color: #4f46e5 !important;
        font-weight: bold !important;
        background-color: white !important;
    }

    #crearTarea {
        background-color: #4f46e5;
        font-weight: bold;
        color: white;
        border: 2px white solid;
        border-radius: 8px;
    }


    .form-control {
        color: black !important;
    }
</style>