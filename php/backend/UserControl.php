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

function obtenerUsuarioPorID($conn, $usuario) {
    $sql = "
        SELECT 
            u.id_us,
            u.cedula,
            u.correo_instit,
            u.cod_carg,
            u.cod_dep,
            u.f_contra,
            u.salario,
            u.administrador, 
            COALESCE(e.nombre1, '') AS nombre1,
            COALESCE(e.nombre2, '') AS nombre2,
            COALESCE(e.apellido1, '') AS apellido1,
            COALESCE(e.apellido2, '') AS apellido2,
            COALESCE(e.f_nacimiento, '') AS f_nacimiento,
            COALESCE(ts.nombre, '') AS tipo_sangre
        FROM usuarios u
        LEFT JOIN empleados e ON u.cedula = e.cedula
        LEFT JOIN tip_sangre ts ON e.id_tipsang = ts.id_tipsang
        WHERE u.id_us = ? OR u.correo_instit = ?
    ";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usuario, $usuario);  // Vinculamos los parámetros correctamente
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();

        // Devolver todos los datos, incluyendo los relacionados
        return [
            'id_us' => $usuario['id_us'],
            'cedula' => $usuario['cedula'],
            'correo_instit' => $usuario['correo_instit'],
            'cod_carg' => $usuario['cod_carg'],
            'cod_dep' => $usuario['cod_dep'],
            'f_contra' => $usuario['f_contra'],
            'salario' => $usuario['salario'],
            'tipo_usuario' => $usuario['administrador'] == 1 ? 'administrador' : 'empleado',
            'nombre1' => $usuario['nombre1'],
            'nombre2' => $usuario['nombre2'],
            'apellido1' => $usuario['apellido1'],
            'apellido2' => $usuario['apellido2'],
            'f_nacimiento' => $usuario['f_nacimiento'],
            'tipo_sangre' => $usuario['tipo_sangre']
        ];
    } else {
        return null;  // No se encuentra el usuario
    }
}