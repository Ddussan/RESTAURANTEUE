<?php
require_once('../conexion/Conexion.php');
require_once('../clases/Factura.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fac_fecha = $_POST['fac_fecha'];
    $fac_hora = $_POST['fac_hora'];
    $fac_total = $_POST['fac_total'];
    $fac_productos = $_POST['fac_productos'];

    $Factura = new Factura($fac_fecha, $fac_hora, $fac_total, $fac_productos);

    $Factura->registrarFactura(); // Asegúrate de que el método se llame igual en la clase Factura

    header("Location: ../../assets/pages/pagPrincipal.php");
    exit();
}
?>
