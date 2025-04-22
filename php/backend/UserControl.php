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

function obtenerEmpleadoPorID($conn, $id_us) {
    $sql = "
        SELECT 
            e.nombre1,
            e.nombre2,
            e.apellido1,
            e.apellido2,
            e.f_nacimiento,
            ts.nombre AS tipo_sangre,
            e.cedula,
            e.f_ingreso,
            e.salario
        FROM empleados e
        INNER JOIN tip_sangre ts ON e.id_tipsang = ts.id_tipsang
        WHERE e.id_us = ?
    ";

    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("i", $id_us);
    $stmt->execute();
    $result = $stmt->get_result(); 

    if ($result->num_rows > 0) {
        return $result->fetch_assoc(); 
    } else {
        return null; 
    }
}



function obtenerAdministradorPorID($conn, $id_us) {
    $sql = "
        SELECT 
            u.id_us,
            u.cedula,
            u.correo_instit,
            u.cod_carg,
            u.cod_dep,
            u.f_contra,
            u.salario,
            e.nombre1,
            e.nombre2,
            e.apellido1,
            e.apellido2,
            e.f_nacimiento,
            ts.nombre AS tipo_sangre
        FROM usuarios u
        INNER JOIN empleados e ON u.cedula = e.cedula
        INNER JOIN tip_sangre ts ON e.id_tipsang = ts.id_tipsang
        WHERE u.id_us = ?
    ";

    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("i", $id_us);
    $stmt->execute(); 
    $result = $stmt->get_result(); 

    if ($result->num_rows > 0) {
        return $result->fetch_assoc(); 
    } else {
        return null; 
    }
}
