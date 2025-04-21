<?php
function verificarCredenciales($conn, $usuario, $password) {
    $sql = "SELECT * FROM usuarios WHERE (id_us = ? OR correo_instit = ?) AND contraseña = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $usuario, $usuario, $password);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function obtenerUsuarioPorCedula($conn, $cedula) {
    $sql = "SELECT * FROM usuarios WHERE cedula = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $cedula);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function obtenerUsuarioPorID($conn, $id_us) {
    $sql = "SELECT * FROM usuarios WHERE id_us = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id_us);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}
