<!DOCTYPE html>
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

        #btnRegistrar{
            background-color: #4f46e5;
            font-weight: bold;
            color: white;
            border: 2px white solid;
            border-radius: 8px;
        }

        #btnRegistrar:hover{
            color:#4f46e5;
            font-weight: bold;
            background-color: white;
        }
        #btnInicio{
            background-color: #4f46e5;
            font-weight: bold;
            color: white;
            border: 2px white solid;
            border-radius: 8px;
        }

        #btnInicio:hover{
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
<div class="card shadow-lg d-flex justify-content-center mx-auto mt-5 rounded" style="width: 30%; max-width: 30%; min-width: 20rem; margin-top: 3% !important;">
    <div class="card-body">
        <h2 class="card-title text-center mb-4 mt-6 text-white text-3xl font-bold underline">Registro</h2>
        <form id="FrmRegistro">
            <div class="form-group">
                <label for="nombre_usuario" class="text-white font-bold">Nombre de usuario:</label>
                <input type="text" id="nombre_usuario" name="nombre_usuario" class="form-control" placeholder="Nombre de usuario">
            </div>
            <div class="form-group">
                <label for="correo_usuario" class="text-white font-bold">Correo electronico:</label>
                <input type="text" id="correo_usuario" name="correo_usuario" class="form-control" placeholder="Correo electronico">
            </div>
            <div class="form-group">
                <label for="contrasena_usuario" class="text-white font-bold">Contraseña:</label>
                <input type="password" id="contrasena_usuario" name="contrasena_usuario" class="form-control" placeholder="contraseña">
            </div>
            <div class="form-group">
                <label for="contrasena_confirmacion" class="text-white font-bold">Confirmar contraseña:</label>
                <input type="password" id="contrasena_confirmacion" name="contrasena_confirmacion" class="form-control" placeholder="confirme contraseña">
            </div>
            <div class="form-group mt-4 mb-4">
                <button id="btnRegistrar" type="button" class="btn btn-primary">Registro</button>
                <a href="index.php"  id="btnInicio" type="button" class="btn btn-primary ml-4">Inicia sesión</a>
            </div>
        </form>
    </div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="./public/js/usuario.js"></script>
</body>
</html>
