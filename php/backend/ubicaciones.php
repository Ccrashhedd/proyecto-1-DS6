<?php
// filepath: c:\xampp\htdocs\proyectoDS6\php\backend\ubicaciones.php
include 'conexion.php';

header('Content-Type: application/json'); // Asegura que la salida sea JSON

if (isset($_GET['tipo']) && isset($_GET['id'])) {
    $tipo = $_GET['tipo'];
    $id = $_GET['id'];

    if ($tipo === 'provincias') {
        $sql = "SELECT codigo_provincia AS id, nombre_provincia AS nombre FROM provincia";
    } elseif ($tipo === 'distritos') {
        $sql = "SELECT codigo_distrito AS id, nombre_distrito AS nombre FROM distrito WHERE codigo_provincia = ?";
    } elseif ($tipo === 'corregimientos') {
        $sql = "SELECT codigo_corregimiento AS id, nombre_corregimiento AS nombre FROM corregimiento WHERE codigo_distrito = ?";
    } else {
        echo json_encode([]);
        exit();
    }

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die(json_encode(["error" => "Error en la preparación de la consulta: " . $conn->error]));
    }

    // Cambiar "i" por "s" para tratar $id como cadena
    if ($tipo !== 'provincias') {
        $stmt->bind_param("s", $id);
    }

    if (!$stmt->execute()) {
        die(json_encode(["error" => "Error en la ejecución de la consulta: " . $stmt->error]));
    }

    $result = $stmt->get_result();

    $datos = [];
    while ($row = $result->fetch_assoc()) {
        $datos[] = $row;
    }

    echo json_encode($datos);
} else {
    echo json_encode(["error" => "Parámetros inválidos"]);
}
?>