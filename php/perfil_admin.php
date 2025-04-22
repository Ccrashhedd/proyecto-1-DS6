<?php
session_start();
if (!isset($_SESSION['id_us'])) {
    header("Location: inic_sesion.php");
    exit();
}

include 'backend/conexion.php';
include 'backend/UserControl.php';

$usuario = obtenerUsuarioPorID($conn, $_SESSION['id_us']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil del Administrador</title>
  <link rel="stylesheet" href="../css/p_admin.css">
</head>
<body>
  <div class="main-wrapper">
    <!-- Header con botones de navegación -->
    <header>
      <button class="logout-button" onclick="window.location.href='logout.php'">Cerrar Sesión</button>
      <div class="button-container">
        <button onclick="window.location.href='añadir.php'">Añadir</button>
        <button onclick="window.location.href='eliminar.php'">Eliminar</button>
        <button onclick="window.location.href='visualizar.php'">Visualizar</button>
        <button onclick="window.location.href='editar.php'">Editar</button>
      </div>
    </header>

    <!-- Contenedor del perfil -->
    <div class="profile-container">
      <h2>Perfil del Administrador</h2>
      <div class="profile-field">
        <label>Nombre Completo:</label>
        <span><?php echo $usuario['nombre'] . ' ' . $usuario['apellido']; ?></span>
      </div>
      <div class="profile-field">
        <label>Edad:</label>
        <span><?php echo $usuario['edad']; ?> años</span>
      </div>
      <div class="profile-field">
        <label>Sexo:</label>
        <span><?php echo $usuario['sexo']; ?></span>
      </div>
      <div class="profile-field">
        <label>Tipo de Sangre:</label>
        <span><?php echo $usuario['tipo_sangre']; ?></span>
      </div>
      <div class="profile-field">
        <label>Departamento:</label>
        <span><?php echo $usuario['cod_dep']; ?></span>
      </div>
      <div class="profile-field">
        <label>Fecha de Ingreso:</label>
        <span><?php echo $usuario['fecha_ingreso']; ?></span>
      </div>
      <div class="profile-field">
        <label>Salario:</label>
        <span>$<?php echo number_format($usuario['salario'], 2); ?></span>
      </div>
    </div>
  </div>

  <!-- Footer con derechos reservados -->
  <footer>
    <p>&copy; <?php echo date("Y"); ?> Empresas Epsilon. Todos los derechos reservados... O algo asi.</p>
  </footer>
</body>
</html>