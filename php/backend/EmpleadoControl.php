<?php
function obtenerTodosLosEmpleados($conn) {
    $sql = "SELECT * FROM empleados";
    return $conn->query($sql);
}

function obtenerEmpleadoPorCedula($conn, $cedula) {
    $sql = "SELECT * FROM empleados WHERE cedula = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $cedula);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}
