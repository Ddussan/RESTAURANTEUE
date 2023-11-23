<?php
class Administrador
{
    private $adm_id;
    private $adm_nombre;
    private $adm_apellido;
    private $adm_correo_electronico;
    private $adm_telefono;
    private $adm_contrasena;

    public function __construct($nombre = null, $apellido = null, $correo = null, $telefono = null, $contrasena = null, $id = null)
    {
        $this->adm_id = $id;
        $this->adm_nombre = $nombre;
        $this->adm_apellido = $apellido;
        $this->adm_correo_electronico = $correo;
        $this->adm_telefono = $telefono;
        $this->adm_contrasena = $contrasena;
    }

    public function getAdm_id()
    {
        return $this->adm_id;
    }
    public function setAdm_id($adm_id)
    {
        $this->adm_id = $adm_id;
    }
    public function getAdm_nombre()
    {
        return $this->adm_nombre;
    }
    public function setAdm_nombre($adm_nombre)
    {
        $this->adm_nombre = $adm_nombre;
    }
    public function getAdm_apellido()
    {
        return $this->adm_apellido;
    }
    public function setAdm_apellido($adm_apellido)
    {
        $this->adm_apellido = $adm_apellido;
    }
    public function getAdm_correo_electronico()
    {
        return $this->adm_correo_electronico;
    }
    public function setAdm_correo_electronico($adm_correo_electronico)
    {
        $this->adm_correo_electronico = $adm_correo_electronico;
    }
    public function getAdm_telefono()
    {
        return $this->adm_telefono;
    }
    public function setAdm_telefono($adm_telefono)
    {
        $this->adm_telefono = $adm_telefono;
    }
    public function getAdm_contrasena()
    {
        return $this->adm_contrasena;
    }
    public function setAdm_contrasena($adm_contrasena)
    {
        $this->adm_contrasena = $adm_contrasena;
    }
    public function actualizarMenu(){
        
    }
}
