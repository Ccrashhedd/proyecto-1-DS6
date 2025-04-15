<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="/css/inic_sesion.css">
</head>
<body>
  <div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form id="loginForm">
      <div class="cedula-group">
        <input type="text" id="cedula" name="cedula" placeholder="Cédula" required />
      </div>
      <input type="password" id="password" name="password" placeholder="Contraseña" required />
      <button type="submit">Iniciar Sesión</button>
    </form>
  </div>

  <script>
    document.getElementById("loginForm").addEventListener("submit", function (event) {
      event.preventDefault(); // Evita el envío del formulario

      const cedula = document.getElementById("cedula").value.trim();

      // Validación de cédula
      if (cedula === "123456") {
        // Redirigir al perfil de empleado
        window.location.href = "perfil.php";
      } else if (cedula === "admin123") {
        // Redirigir al perfil de administrador
        window.location.href = "perfil_admin.php";
      } else {
        alert("Cédula no válida. Por favor, inténtelo de nuevo.");
      }
    });
  </script>
</body>
</html>