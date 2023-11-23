<?php
class Menu
{
    private $mnu_id;
    private $mnu_platillo;
    private $mnu_descripcion;
    private $mnu_precio;
    private $mnu_cantidades;

    public function __construct($platillo, $descripcion, $precio, $cantidades, $id = null)
    {
        $this->mnu_platillo = $platillo;
        $this->mnu_descripcion = $descripcion;
        $this->mnu_precio = $precio;
        $this->mnu_cantidades = $cantidades;
    }
    public function getMnu_id()
    {
        return $this->mnu_id;
    }
    public function setMnu_id($mnu_id)
    {
        $this->mnu_id = $mnu_id;
    }
    public function getMnu_platillo()
    {
        return $this->mnu_platillo;
    }
    public function setMnu_platillo($mnu_platillo)
    {
        $this->mnu_platillo = $mnu_platillo;
    }
    public function getMnu_descripcion()
    {
        return $this->mnu_descripcion;
    }
    public function setMnu_descripcion($mnu_descripcion)
    {
        $this->mnu_descripcion = $mnu_descripcion;
    }
    public function getMnu_precio()
    {
        return $this->mnu_precio;
    }
    public function setMnu_precio($mnu_precio)
    {
        $this->mnu_precio = $mnu_precio;
    }
    public function getMnu_cantidades()
    {
        return $this->mnu_cantidades;
    }
    public function setMnu_cantidades($mnu_cantidades)
    {
        $this->mnu_cantidades = $mnu_cantidades;
    }
    public function registrarMenu()
    {
        $conexion = new Conexion();
        if ($this->mnu_id) {
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET mnu_platillo = :mnu_platillo, mnu_descripcion = :mnu_descripcion,
        mnu_precio = :mnu_precio, mnu_cantidades = :mnu_cantidades
        WHERE mnu_id = :mnu_id');
            $consulta->bindParam(':mnu_platillo', $this->mnu_platillo);
            $consulta->bindParam(':mnu_descripcion', $this->mnu_descripcion);
            $consulta->bindParam(':mnu_precio', $this->mnu_precio);
            $consulta->bindParam(':mnu_cantidades', $this->mnu_cantidades);
            $consulta->bindParam(':mnu_id', $this->mnu_id);
            $consulta->execute();
        } else {
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (mnu_platillo, mnu_descripcion,  mnu_precio,
        mnu_cantidades) VALUES (:mnu_platillo, :mnu_descripcion, :mnu_precio,
        :mnu_cantidades)');
            $consulta->bindParam(':mnu_platillo', $this->mnu_platillo);
            $consulta->bindParam(':mnu_descripcion', $this->mnu_descripcion);
            $consulta->bindParam(':mnu_precio', $this->mnu_precio);
            $consulta->bindParam(':mnu_cantidades', $this->mnu_cantidades);
            // No es necesario enlazar :mnu_id en el caso del INSERT
            $consulta->execute();
            $this->mnu_id = $conexion->lastInsertId();
        }
        $conexion = null;
    }
}
}
