<?php
class Pedido
{
    private $pds_id;
    private $pds_fecha;
    private $pds_hora;
    private $pds_estado;

    public function __construct($fecha, $hora, $tipo_transaccion, $id = null)
    {
        $this->pds_id = $id;
        $this->pds_fecha = $fecha;
        $this->pds_hora = $hora;
        $this->pds_estado = $tipo_transaccion;
    }
    public function getPds_id()
    {
        return $this->pds_id;
    }
    public function setPds_id($pds_id)
    {
        $this->pds_id = $pds_id;
    }
    public function getPds_fecha()
    {
        return $this->pds_fecha;
    }
    public function setPds_fecha($pds_fecha)
    {
        $this->pds_fecha = $pds_fecha;
    }
    public function getPds_hora()
    {
        return $this->pds_hora;
    }
    public function setPds_hora($pds_hora)
    {
        $this->pds_hora = $pds_hora;
    }
    public function getPds_estado()
    {
        return $this->pds_estado;
    }
    public function setPds_estado($pds_estado)
    {
        $this->pds_estado = $pds_estado;
    }
}
