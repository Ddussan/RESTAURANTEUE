<?php
session_start();

require_once('../conexion/Conexion.php');
require_once('../clases/Usuario.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usu_correo_electronico = $_POST['usu_correo_electronico'];
    $usu_contrasena = $_POST['usu_contrasena'];

    // Intenta autenticar al usuario
    $usuario = Usuario::autenticarUsuario($usu_correo_electronico, $usu_contrasena);

    if ($usuario) {
        // Inicia la sesión y almacena información del usuario en la variable $_SESSION
        $_SESSION['usuario_id'] = $usuario->getUsu_id();
        $_SESSION['usuario_nombre'] = $usuario->getUsu_nombre();

        // Redirige a la página principal después de iniciar sesión
        header("Location: ../../assets/pages/pagPrincipal.php");
        exit();
    } else {
        echo ", credenciales incorrectas.Intente de nuevo.";
    }
}
