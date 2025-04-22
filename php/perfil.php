<?php
/*
session_start();

// Verifica si la sesión de usuario está activa
if (!isset($_SESSION['id_us'])) {
    header("Location: inic_sesion.php"); // Redirige si no hay sesión activa
    exit();
}

// Incluye los archivos de conexión y funciones
include 'backend/conexion.php';
include 'backend/UserControl.php';

// Obtiene los datos del usuario basados en su ID (almacenado en la sesión)
$usuario = obtenerEmpleadoPorID($conn, $_SESSION['id_us']);

// Verifica si el usuario no fue encontrado (es decir, no es un empleado)
if ($usuario == null) {
    header("Location: perfil_admin.php"); // Si no es un empleado, redirige al perfil de administrador
    exit();
}
*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil del Empleado</title>
  <link rel="stylesheet" href="../css/perfil.css">
</head>
<body>

  <!-- Header con el botón de cerrar sesión -->
  <header>
    <button class="logout-button" onclick="window.location.href='logout.php'">Cerrar Sesión</button>
  </header>

  <!-- Contenedor del perfil -->
  <div class="profile-container">
    <h2>Perfil del Empleado</h2>
    <div class="profile-field">
      <label>Nombre Completo:</label>
      <span><?php echo $usuario['nombre1'] . ' ' . $usuario['nombre2'] . ' ' . $usuario['apellido1'] . ' ' . $usuario['apellido2']; ?></span>
    </div>
    <div class="profile-field">
      <label>Fecha de Nacimiento:</label>
      <span><?php echo $usuario['f_nacimiento']; ?></span>
    </div>
    <div class="profile-field">
      <label>Tipo de Sangre:</label>
      <span><?php echo $usuario['tipo_sangre']; ?></span>
    </div>
    <div class="profile-field">
      <label>Cédula registrada:</label>
      <span><?php echo $usuario['cedula']; ?></span>
    </div>
    <div class="profile-field">
      <label>ID de empresa:</label>
      <span><?php echo $usuario['id_us']; ?></span>
    </div>
    <div class="profile-field">
      <label>Correo:</label>
      <span><?php echo $usuario['correo_instit']; ?></span>
    </div>
    <div class="profile-field">
      <label>Código de cargo:</label>
      <span><?php echo $usuario['cod_carg']; ?></span>
    </div>
    <div class="profile-field">
      <label>Código de departamento:</label>
      <span><?php echo $usuario['cod_dep']; ?></span>
    </div>
    <div class="profile-field">
      <label>Fecha de Ingreso:</label>
      <span><?php echo $usuario['f_contra']; ?></span>
    </div>
    <div class="profile-field">
      <label>Salario:</label>
      <span>$<?php echo number_format($usuario['salario'], 2); ?></span>
    </div>
  </div>

  <!-- Footer con derechos reservados -->
  <footer>
    <p>&copy; <?php echo date("Y"); ?> Empresas Epsilon. Todos los derechos reservados.</p>
  </footer>

</body>
</html>
