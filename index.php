<?php

if(!isset($_SESSION['id_usuario'])){
   $_SESSION['error'] = 'Debes iniciar sesion';

 }



 

?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./public/img/listaIcon.svg">
    <title>AppLista</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body{
            background-color: #0F172A;
        }

        .card{
            background-color: #4f46e5;
            border-radius: 10px;
            margin-top: 38px;
            padding-top: 8px;
            width: 80%;
        }

        #btnSesion{
            background-color: #4f46e5;
            font-weight: bold;
            color: white;
            border: 2px white solid;
            border-radius: 8px;
        }

        #btnSesion:hover{
            color:#4f46e5;
            font-weight: bold;
            background-color: white;
        }

        .form-control{
            color: black !important;
        }
    </style>
</head>
<body>

<div class="card shadow-lg d-flex justify-content-center mx-auto mt-5 rounded" style="width: 30%; max-width: 30%; min-width: 20rem; margin-top: 8% !important;">
    <div class="card-body">
        <h2 class="card-title text-center mb-3 p-1 text-white display-5 font-weight-bold">Inicia Sesión</h2>
        <form id="FrmLogin">
            <div class="form-group">
                <label for="nombre_usuario" class="text-white font-weight-bold">Usuario:</label>
                <input type="text" id="nombre_usuario" name="nombre_usuario" class="form-control" placeholder="usuario">
            </div>
            <div class="form-group">
                <label for="contrasena" class="text-white font-weight-bold">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="contraseña">
            </div>
            <div class="form-group d-flex flex-column mb-3">
                <button id="btnSesion" type="button" class="btn btn-primary">Ingresa</button>
            </div>
            <div class="form-group d-flex flex-column">
                <label class="text-center">
                    <a href="registro.php" class="text-white text-decoration-none hover:bg-indigo-900 p-3 rounded hover:text-indigo-500">Registrate aquí</a>
                </label>
            </div>
        </form>
    </div>
</div>
</div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="./public/js/usuario.js"></script>
</body>
</html>

<script>
    window.onload = function () {
    window.history.forward();
}
</script>
