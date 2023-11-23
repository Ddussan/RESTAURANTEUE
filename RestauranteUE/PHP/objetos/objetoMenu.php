<?php
  require_once('../conexion/Conexion.php');
  require_once('../clases/Menu.php');
  
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $mnu_platillo = $_POST['mnu_platillo'];
    $mnu_descripcion = $_POST['mnu_descripcion'];
    $mnu_precio = $_POST['mnu_precio'];
    $mnu_cantidades = $_POST['mnu_cantidades'];

    $Menu = new Menu($mnu_platillo, $mnu_descripcion, $mnu_precio,
   $mnu_cantidades);

    $menu->registrarMenu();

    header("Location: ../../assets/pages/pagPrincipal.php");
    exit();
  }
?>