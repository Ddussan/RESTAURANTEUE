<?php
class Transaccion
{
    private $trs_id;
    private $trs_fecha_transaccion;
    private $trs_hora_transaccion;
    private $trs_tipo_transaccion;
    private $trs_total_pago;


    public function __construct($fecha, $hora, $tipo_transaccion, $total, $id = null)
    {

        $this->trs_id = $id;
        $this->trs_fecha_transaccion = $fecha;
        $this->trs_hora_transaccion = $hora;
        $this->trs_tipo_transaccion = $tipo_transaccion;
        $this->trs_total_pago = $total;
    }
    public function getTrs_id()
    {
        return $this->trs_id;
    }
    public function setTrs_id($trs_id)
    {
        $this->trs_id = $trs_id;
    }
    public function getTrs_fecha_transaccion()
    {
        return $this->trs_fecha_transaccion;
    }
    public function setTrs_fecha_transaccion($trs_fecha_transaccion)
    {
        $this->trs_fecha_transaccion = $trs_fecha_transaccion;
    }
    public function getTrs_hora_transaccion()
    {
        return $this->trs_hora_transaccion;
    }
    public function setTrs_hora_transaccion($trs_hora_transaccion)
    {
        $this->trs_hora_transaccion = $trs_hora_transaccion;
    }
    public function getTrs_tipo_transaccion()
    {
        return $this->trs_tipo_transaccion;
    }
    public function setTrs_tipo_transaccion($trs_tipo_transaccion)
    {
        $this->trs_tipo_transaccion = $trs_tipo_transaccion;
    }
    public function getTrs_total_pago()
    {
        return $this->trs_total_pago;
    }
    public function setTrs_total_pago($trs_total_pago)
    {
        $this->trs_total_pago = $trs_total_pago;
    }
    public function realizarTransaccion(){

    }
    public function cancelarTransaccion(){
        
    }
    public function confirmarTransaccion(){
        
    }
}
