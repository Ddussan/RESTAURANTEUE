<?php
class Factura
{
    private $fac_id;
    private $fac_fecha;
    private $fac_hora;
    private $fac_total;
    private $fac_producto;

    public function __construct($fecha, $hora, $total, $producto, $id = null)
    {

        $this->fac_id = $id;
        $this->fac_fecha = $fecha;
        $this->fac_hora = $hora;
        $this->fac_total = $total;
        $this->fac_producto = $producto;
    }

    public function getFac_id()
    {
        return $this->fac_id;
    }
    public function setFac_id($fac_id)
    {
        $this->fac_id = $fac_id;
    }
    public function getFac_fecha()
    {
        return $this->fac_fecha;
    }
    public function setFac_fecha($fac_fecha)
    {
        $this->fac_fecha = $fac_fecha;
    }
    public function getFac_hora()
    {
        return $this->fac_hora;
    }
    public function setFac_hora($fec_hora)
    {
        $this->fac_hora = $fec_hora;
    }
    public function getFac_total()
    {
        return $this->fac_total;
    }
    public function setFac_total($fac_total)
    {
        $this->fac_total = $fac_total;
    }
    public function getFac_producto()
    {
        return $this->fac_producto;
    }
    public function setFac_producto($fac_producto)
    {
        $this->fac_producto = $fac_producto;
    }
    public function realizarPago(){
        
    }
    public function registrarFactura()
    {
        $conexion = new Conexion();
        if ($this->fac_id) {
            $consulta = $conexion->prepare('UPDATE tabla_facturas SET fac_fecha = :fac_fecha, fac_hora = :fac_hora,
                fac_total = :fac_total, fac_producto = :fac_producto WHERE fac_id = :fac_id');
            $consulta->bindParam(':fac_fecha', $this->fac_fecha);
            $consulta->bindParam(':fac_hora', $this->fac_hora);
            $consulta->bindParam(':fac_total', $this->fac_total);
            $consulta->bindParam(':fac_producto', $this->fac_producto);
            $consulta->bindParam(':fac_id', $this->fac_id);
            $consulta->execute();
        } else {
            $consulta = $conexion->prepare('INSERT INTO tabla_facturas (fac_fecha, fac_hora, fac_total, fac_producto)
                VALUES (:fac_fecha, :fac_hora, :fac_total, :fac_producto)');
            $consulta->bindParam(':fac_fecha', $this->fac_fecha);
            $consulta->bindParam(':fac_hora', $this->fac_hora);
            $consulta->bindParam(':fac_total', $this->fac_total);
            $consulta->bindParam(':fac_producto', $this->fac_producto);
            $consulta->execute();
            $this->fac_id = $conexion->lastInsertId();
        }
        $conexion = null;
    }

    public function verFactura(){
        
    }
}
