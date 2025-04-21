<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="../css/inic_sesion.css">
</head>
<body>
<div class="welcome-message">
    <h1>Empresas Epsilon</h1>
  </div>
  <div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form id="loginForm">
      <div class="cedula-group">
      <input type="text" id="usuario" name="usuario" placeholder="ID o Correo" required />
      </div>
      <input type="password" id="password" name="password" placeholder="Contraseña" required />
      <button type="submit">Iniciar Sesión</button>
    </form>
  </div>

  <script>
  document.getElementById("loginForm").addEventListener("submit", function (event) {
    event.preventDefault();

    const usuario = document.getElementById("usuario").value.trim(); // <-- antes era "cedula"
    const password = document.getElementById("password").value.trim();

    const formData = new FormData();
    formData.append("usuario", usuario); // <-- antes era "cedula"
    formData.append("password", password);

    fetch("../php/backend/login.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((data) => {
       console.log("Respuesta del servidor:", data); // <-- esto
       data = data.trim();

       if (data === "admin") {
          console.log("Redireccionando a perfil_admin.php");
          window.location.href = "perfil_admin.php";
        } else if (data === "usuario") {
          window.location.href = "perfil.php";
        } else {
          alert("ID o contraseña incorrecta.");
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
</script>
 
</body>
</html>