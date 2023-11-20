<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AppLista</title>
    <link rel="icon" href="../public/img/listaIcon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  

 
    
</head>
<body>

<nav class="navbar navbar-expand-lg white" id="navMenu">
  <div class="container-fluid">
    <img src="../public/img/listaIconB.svg" alt="" srcset="">
    <a class="navbar-brand" href="#">AppLista</a>
    <button class="navbar-toggler light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
      <li class="nav-item dropdown mx-2">
          <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gestionar Tareas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="crearTarea.php">Crear Tarea.</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item" href="listarTarea.php">Listado de Tareas.</a>
            </li>
            <li>
            <a class="dropdown-item" href="listarTareaInactiva.php">Listado de Tareas Inactivas.</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown mx-2">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gestionar asignación de Tareas
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item py-2 b-2" href="asignarTarea.php">Crear Asignación de Tarea.</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="listarTareaAsignada.php">Mis Tareas Asignadas.</a></li>
            <li><a class="dropdown-item" href="listarTareaAsignadaCompletadas.php">Mis Tareas Completadas.</a></li>
          </ul>
        </li>
    

        <li class="nav-item mx-2">
          <a class="nav-link">
            <?php @session_start();  echo $_SESSION['nombre_usuario'] ?>
          </a>
        </li>

      <form class="d-flex">
        <a id="cerrarSesion" class="btn btn-outline-light" type="submit">Cerrar Sesión</a>
      </form>
    </div>
  </div>
</nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="../public//js/cerrarSesion.js"></script>


   
   
   




</body>
</html>

<style>
      .navbar-light .navbar-toggler {
    color: rgba(255,255,255,.5);
    border-color: rgba(255,255,255,.1);
}

.navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

   #navMenu{
       background-color: #4f46e5;
   }

   #navMenu, .nav-link{
    font-size: 16px;
    color: white !important;
    font-weight: bold;
   }

   .nav-link:hover{
    font-size: 16px;
    background-color: white;
    color: #4f46e5 !important;
    border-radius: 8px !important;
   }

   .navbar-brand{
    color: white;
   }


   .navbar-brand:hover{
    color: #cacacc !important;
    border-radius: 10px;
   }

   .btn-outline-light:hover{
    color: #4f46e5 !important;
    font-weight: bold;
   }


   .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
    box-shadow: none !important;
}


.navbar-toggler-icon:focus{
    box-shadow: none !important;
    outline: none;
}

.dropdown-item:hover{
  background-color: #4f46e5 !important;
  color: white !important;
}
 
   body{
    background-color: #0F172A !important;
   }

   option:hover{
    background-color: #4f46e5 !important;
   }


   /*estilo global modal*/

   .modal-title{
    color: white;
   }

   .modal-content, .form-label-color{
    background-color: #0F172A !important;
    color: #afafaf;
    font-weight: bold;
    font-size: 17px;
   }


   .modal-content  p{
    background-color: #0F172A !important;
    color: white;
    font-size: 16px;
    margin-bottom: 29px;
   }


   .modal-content h4{
    font-weight: bold;
    font-size: 18px;
    color: white;
   }

   .btn-close{
    background-color: #afafaf !important;
    font-weight: 500 !important;
   }

   .modal-content select{
    background-color: #6e6f71 !important;
    color: black;
   }

   .btn-secondary{
    background-color: #4f46e5 !important;
    border: 2px solid #4f46e5 !important;
    font-weight: 500 !important;
   }

   .btn-secondary:hover{
    background-color: #746de3 !important;
    border: 2px solid #746de3 !important;
   }


   .btn-warning{
    font-weight: 500 !important;
   }

   .btn-warning:hover{
    background-color: #bd982a;
    border: 1px solid #bd982a;
   }

   .btn-success{
    background-color: #0dbd3c !important;
    color: black !important;
    font-weight: 500 !important;
   }
</style>
