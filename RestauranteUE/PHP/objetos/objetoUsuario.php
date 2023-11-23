<?php
  require_once('../conexion/Conexion.php');
  require_once('../clases/Usuario.php');
  
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $usu_nombre = $_POST['usu_nombre'];
    $usu_apellido = $_POST['usu_apellido'];
    $usu_correo_electronico = $_POST['usu_correo_electronico'];
    $usu_telefono = $_POST['usu_telefono'];
    $usu_contrasena = $_POST['usu_contrasena'];

    $usuario = new Usuario($usu_nombre, $usu_apellido, $usu_correo_electronico,
    $usu_telefono, $usu_contrasena);

    $usuario->registrarUsuario();

    header("Location: ../../assets/pages/pagPrincipal.php");
    exit();
  }
?>