$(document).ready(function () {
  listarTareaAsignadas();
  listarTareas();
  listarUsuario();

  // asignar tarea
  $(document).on("click", "#asignarTarea", function () {
    let selNombreTarea = $("#selNombreTarea").val();
    let selUsuario = $("#selUsuario").val();

    if (selNombreTarea == "Seleccione el nombre de la Tarea") {
      alert("Debe seleccionar una tarea");
      return false;
    } else if (selUsuario == "Seleccione el usuario") {
      alert("Debe seleccionar un usuario");
      return false;
    } else {
      $.ajax({
        url: "../controlador/crearAsignarTarea.php",
        method: "POST",
        dataType: "JSON",
        data: $("#FrmAsignarTarea").serialize(),
      })
        .done(function (json) {
          alert("Tarea asignada correctamente");
          setInterval('window.location.reload()', 2000);
          console.log(json);
        })
        .fail(function (error) {
          console.log(error);
        });
    }
  });

  $(document).on("click", "#btnModificar", function () {
    $.ajax({
      url: "../controlador/modificarAsignarTarea.php",
      method: "POST",
      dataType: "JSON",
      data: $("#FrmTareaAsignada").serialize(),
    })
      .done(function (json) {
        console.log(json);
        alert("Tarea asignada modificada");
        $("#btnModificar").modal("hide");
        listarTareaAsignadas();
      })
      .fail(function (error) {
        console.log(error);
        console.log("error");
      });
  });

  function listarTareaAsignadas() {
    $.ajax({
      url: "../controlador/listarAsignarTarea.php",
      method: "GET",
      dataType: "JSON",
      data: $("#FrmTareaAsignada").serialize(),
    })
      .done(function (json) {
        console.log(json);
        var tabla;
        json.forEach((contenidoTarea) => {
          tabla += `
                <tr>
                
                <td >${contenidoTarea.nombre_tarea}</td>
                <td>${contenidoTarea.descripcion_tarea}</td>

                <td id="estadoTarea" >${contenidoTarea.estado_tarea}</td>
                <td>
                <a href='../vista/listarTareaAsignada.php' onclick='selecionarModificar(${JSON.stringify(
                  contenidoTarea
                )})' class='btn btn-warning m-1' data-bs-toggle='modal' data-bs-target='#modalModificar'>Modificar</a>

                <a href='../vista/listarTareaAsignada.php' onclick='selecionarModificar(${JSON.stringify(
                  contenidoTarea
                )})' class='btn btn-success m-1' data-bs-toggle='modal' data-bs-target='#modalEliminar'>Completar</a>

                </td>

                <style>
              

                #estadoTarea{
                  color: #f28107 !important;
                  font-weight: bold;
                }
                </style>
                </tr>
                `;
        });
        $("#contenidoTareaAsignada").html(tabla);
      })
      .fail(function (error) {
        console.log("hubo un error");
      });
  }

  function listarTareas() {
    $.ajax({
      url: "../controlador/listarTareas.php",
      method: "GET",
      dataType: "JSON",
      data: null,
    })
      .done(function (json) {
        console.log(json);

        json.forEach((tarea) => {
          $("#selNombreTarea").append(
            `<option value="${tarea.id_tarea}">${tarea.nombre_tarea}</option>`
          );
          $("#selNombreTareaM").append(
            `<option value="${tarea.id_tarea}" selected>${tarea.nombre_tarea}</option>`
          );
          $("#selDescripcionTareaM").append(
            `<option value="${tarea.id_tarea}" selected>${tarea.descripcion_tarea}</option>`
          );
        });

        $("#selNombreTarea").change(function () {
          let tareaSeleccionadaId = $(this).val();

          if (tareaSeleccionadaId === "Seleccione el nombre de la Tarea") {
            $("#contenidoDescripcion").html("");
          } else {
            let tareaSeleccionada = json.find(
              (tarea) => tarea.id_tarea == tareaSeleccionadaId
            );

            if (tareaSeleccionada) {
              let contenidoDescripcion = document.querySelector(
                "#contenidoDescripcion"
              );
              contenidoDescripcion.innerHTML =
                tareaSeleccionada.descripcion_tarea;
            }
          }
        });

        $("#selDescripcionTareaM").prop("disabled", true);

        $("#selNombreTareaM").change(function () {
          let tareaSeleccionadaId = $(this).val();

          if (tareaSeleccionadaId === "Seleccione el nombre de la Tarea") {
            $("#selDescripcionTareaM").html("");
          } else {
            let tareaSeleccionada = json.find(
              (tarea) => tarea.id_tarea == tareaSeleccionadaId
            );

            if (tareaSeleccionada) {
              $("#selDescripcionTareaM").html(
                `<option value="${tareaSeleccionada.id_tarea}">${tareaSeleccionada.descripcion_tarea}</option>`
              );
            }
          }
        });
      })
      .fail(function (error) {
        console.log("hubo un error" + error);
      });
  }

  function listarUsuario() {
    $.ajax({
      url: "../controlador/listarUsuario.php",
      method: "GET",
      dataType: "JSON",
      data: null,
    })
      .done(function (json) {
        console.log(json);

        json.forEach((usuario) => {
          $("#selUsuario").append(
            `<option value="${usuario.id_usuario}">${usuario.nombre_usuario} </option>`
          );

          $("#selUsuarioM").append(
            `<option value="${usuario.id_usuario}">${usuario.nombre_usuario} </option>`
          );
        });
      })
      .fail(function (error) {
        console.log("hubo un error" + error);
      });
  }

  $(document).on("click", "#btnEliminar", function () {
    respuesta = confirm("¿Estas seguro de cambiar el estado de tu tarea?");

    if (respuesta == true) {
      $.ajax({
        url: "../controlador/eliminarTareaAsignada.php",
        method: "POST",
        dataType: "JSON",
        data: $("#FrmTareaAsignadaDesactivar").serialize(),
      })
        .done(function (json) {
          alert("¡Felicitaciones, haz completado la tarea!");
          console.log(json);
          listarTareaAsignadas();
        })
        .fail(function (error) {
          alert("Ha ocurrido un error al desactivar la tarea asignada" + error);
        });
    } else {
      alert("Perfecto, no quieres modificar su estado.");
    }
  });

  
});

function selecionarModificar(contenidoTarea) {


  const {id_tarea_usuario, id_tarea, id_usuario, nombre_tarea, descripcion_tarea, nombre_usuario, estado_tarea} = contenidoTarea
  //Para mostrar los datos a modificar
  $("#idTareaUsuarioM").val(id_tarea_usuario);
  $("#selNombreTareaM").val(id_tarea);
  $("#selDescripcionTareaM").val(id_tarea);
  $("#selUsuarioM").val(id_usuario);

  //Para mostrar los datos a completar la tarea asignada
  $("#idTareaUsuarioE").val(id_tarea_usuario);
  $("#nombreTareaE").text(nombre_tarea);
  $("#descripcionTareaE").text(descripcion_tarea);
  $("#usuarioTareaE").text(nombre_usuario);
  $('#estadoTareaE').text(estado_tarea);

}
