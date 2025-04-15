<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil del Administrador</title>
  <link rel="stylesheet" href="/css/p_admin.css">
</head>
<body>
  <button class="logout-button" onclick="window.location.href='inic_sesion.php'">Cerrar Sesión</button>
  <div class="button-container">
    <button onclick="window.location.href='añadir.php'">Añadir</button>
    <button onclick="window.location.href='eliminar.php'">Eliminar</button>
    <button onclick="window.location.href='visualizar.php'">Visualizar</button>
    <button onclick="window.location.href='editar.php'">Editar</button>
  </div>

  <div class="profile-container">
    <h2>Perfil del Administrador</h2>
    <div class="profile-field">
      <label>Nombre Completo:</label>
      <span id="nombre"></span>
    </div>
    <div class="profile-field">
      <label>Edad:</label>
      <span id="edad"></span>
    </div>
    <div class="profile-field">
      <label>Sexo:</label>
      <span id="sexo"></span>
    </div>
    <div class="profile-field">
      <label>Tipo de Sangre:</label>
      <span id="tipo-sangre"></span>
    </div>
    <div class="profile-field">
      <label>Departamento:</label>
      <span id="departamento"></span>
    </div>
    <div class="profile-field">
      <label>Fecha de Ingreso:</label>
      <span id="fecha-ingreso"></span>
    </div>
  </div>

  <script>
    // Simulación de una solicitud al servidor PHP
    async function cargarDatosEmpleado() {
      const respuestaSimulada = {
        nombre: "Juan Pérez",
        edad: "30 años",
        sexo: "Masculino",
        tipoSangre: "O+",
        departamento: "Recursos Humanos",
        fechaIngreso: "15 de marzo de 2020"
      };

      await new Promise(resolve => setTimeout(resolve, 1000));

      document.getElementById("nombre").textContent = respuestaSimulada.nombre;
      document.getElementById("edad").textContent = respuestaSimulada.edad;
      document.getElementById("sexo").textContent = respuestaSimulada.sexo;
      document.getElementById("tipo-sangre").textContent = respuestaSimulada.tipoSangre;
      document.getElementById("departamento").textContent = respuestaSimulada.departamento;
      document.getElementById("fecha-ingreso").textContent = respuestaSimulada.fechaIngreso;
    }

    cargarDatosEmpleado();
  </script>
</body>
</html>