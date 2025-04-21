<?php
session_start();
include 'conexion.php';
include 'UserControl.php';

$usuarioInput = trim($_POST['usuario'] ?? '');
$password = trim($_POST['password'] ?? '');

$usuario = verificarCredenciales($conn, $usuarioInput, $password);

if ($usuario) {
    $_SESSION['id_us'] = $usuario['id_us'];

    if ($usuario['administrador'] == 1) {
        echo "admin";
    } else {
        echo "usuario";
    }
} else {
    echo "error";
}
