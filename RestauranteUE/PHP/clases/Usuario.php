<?php

require_once "../conexion/Conexion.php";
class Usuario
{
    private $usu_id;
    private $usu_nombre;
    private $usu_apellido;
    private $usu_correo_electronico;
    private $usu_telefono;
    private $usu_contrasena;
    const TABLA = "usuario";


    //Constructor para la clase usuario
    public function __construct($nombre, $apellido, $correo, $telefono, $contrasena, $id = null)
    {
        $this->usu_id = $id;
        $this->usu_nombre = $nombre;
        $this->usu_apellido = $apellido;
        $this->usu_correo_electronico = $correo;
        $this->usu_telefono = $telefono;
        $this->usu_contrasena = $contrasena;
    }

    //Metodos getter y setter para "usu_id"
    public function getUsu_id()
    {
        return $this->usu_id;
    }
    public function setUsu_id($usu_id)
    {
        $this->usu_id = $usu_id;
    }
    //Metodos getter y setter para "usu_nombre"
    public function getUsu_nombre()
    {
        return $this->usu_nombre;
    }
    public function setUsu_nombre($usu_nombre)
    {
        $this->usu_nombre = $usu_nombre;
    }
    //Metodos getter y setter para "usu_apellido"
    public function getUsu_apellido()
    {
        return $this->usu_apellido;
    }
    public function setUsu_apellido($usu_apellido)
    {
        $this->usu_apellido = $usu_apellido;
    }
    //Metodos getter y setter para "usu_correo_electronico"
    public function getUsu_correo_electronico()
    {
        return $this->usu_correo_electronico;
    }
    public function setUsu_correo_electronico($usu_correo_electronico)
    {
        $this->usu_correo_electronico = $usu_correo_electronico;
    }
    //Metodos getter y setter para "usu_telefono"
    public function getUsu_telefono()
    {
        return $this->usu_telefono;
    }
    public function setUsu_telefono($usu_telefono)
    {
        $this->usu_telefono = $usu_telefono;
    }
    //Metodos getter y setter para "usu_contrasena"
    public function getUsu_contrasena()
    {
        return $this->usu_contrasena;
    }
    public function setUsu_contrasena($usu_contrasena)
    {
        $this->usu_contrasena = $usu_contrasena;
    }

    //Metodo para guardar el objeto en la base de datos
    public function registrarUsuario()
    {
        $conexion = new Conexion();
        if ($this->usu_id) {
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET usu_nombre = :usu_nombre, usu_apellido = :usu_apellido,
            usu_correo_electronico = :usu_correo_electronico, usu_telefono = :usu_telefono,
            usu_contrasena = :usu_contrasena WHERE usu_id = :usu_id');
            $consulta->bindParam(':usu_nombre', $this->usu_nombre);
            $consulta->bindParam(':usu_apellido', $this->usu_apellido);
            $consulta->bindParam(':usu_correo_electronico', $this->usu_correo_electronico);
            $consulta->bindParam(':usu_telefono', $this->usu_telefono);
            $consulta->bindParam(':usu_contrasena', $this->usu_contrasena);
            $consulta->bindParam(':usu_id', $this->usu_id);
            $consulta->execute();
        } else {
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (usu_nombre, usu_apellido, usu_correo_electronico,
            usu_telefono, usu_contrasena) VALUES (:usu_nombre, :usu_apellido, :usu_correo_electronico,
            :usu_telefono, :usu_contrasena)');
            $consulta->bindParam(':usu_nombre', $this->usu_nombre);
            $consulta->bindParam(':usu_apellido', $this->usu_apellido);
            $consulta->bindParam(':usu_correo_electronico', $this->usu_correo_electronico);
            $consulta->bindParam(':usu_telefono', $this->usu_telefono);
            $consulta->bindParam(':usu_contrasena', $this->usu_contrasena);
            // No es necesario enlazar :usu_id en el caso del INSERT
            $consulta->execute();
            $this->usu_id = $conexion->lastInsertId();
        }
        $conexion = null;
    }



    // En la clase Usuario
    public static function autenticarUsuario($correo, $contrasena)
    {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE usu_correo_electronico = :correo');
        $consulta->bindParam(':correo', $correo);
        $consulta->execute();
        $usuario = $consulta->fetch(PDO::FETCH_ASSOC);

        // Verifica si el usuario existe y la contraseña es correcta
        if ($usuario) {
            if ($contrasena === $usuario['usu_contrasena']) {
                return new self(
                    $usuario['usu_nombre'],
                    $usuario['usu_apellido'],
                    $usuario['usu_correo_electronico'],
                    $usuario['usu_telefono'],
                    $usuario['usu_contrasena'],
                    $usuario['usu_id']
                );
            } else {
                echo "Contraseña incorrecta";  // Mensaje de depuración
            }
        } else {
            echo "Usuario no encontrado";  // Mensaje de depuración
        }

        return null; // Si las credenciales no son válidas
    }


    public static function mostrarUsuario()
    {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM' . self::TABLA . ' ORDER BY usu_id');
        $consulta->execute();
        $registros = $consulta->fetchAll();
        return $registros;
    }
    public function eliminarUsuario()
    {
        if ($this->usu_id) {
            $conexion = new Conexion();
            $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE usu_id = :usu_id');
            $consulta->bindParam(':usu_id', $this->usu_id);
            $consulta->execute();
            $conexion = null;
        }
    }
    public function realizarPedido(){
        
    }
    public function realizarTransaccion(){
        
    }
    public function verMenu(){
        
    }
}
