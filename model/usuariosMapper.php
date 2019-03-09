<?php
// file: model/UsuarioMapper.php 
require_once (__DIR__ . "/../core/conexion_bd.php");

/**
 * Clase UsuarioMapper
 * 
 * Interfaz de base de datos para entidades UsuarioMapper
 * 
 */

class UsuarioMapper
{
    /**
    * Referencia a la conexion a la base de datos
    *
    * @var mysqli
    */

    private $db;

    public function __construct()
    {
        $this->db = Conectar::conexion();
    }


    /**
     * Guardar un Usuario
     * 
     * @param $usuario
     * @return void
     */

    public function guardar($user)
    {
        $sentencia = $this->db->prepare("INSERT INTO usuarios(nk_usuario, pass, tipo, nombre, apellido1, apellido2, email)
                                                VALUES (?,?,?,?,?,?,?)");

        $sentencia->execute(array(
            $user->getNick(),
            $user->getPass(),
            $user->getTipo(),
            $user->getNombre(),
            $user->getApellido_1(),
            $user->getApellido_2(),
            $user->getEmail()
        ));
    }

    /**
     * Eliminar a un Usuario
     * 
     * @param $id
     * @return void
     * 
     */

    public function borrar($id)
    {
       $sentencia = $this->db->prepare("DELETE FROM usuarios WHERE id = ?");

       $sentencia->execute(array(
           $id
       ));
    }

    /**
     * Editar a un usuario
     * 
     * @param $id, $nick, $pass, $tipo, $nombre, $apellido_1, $apellido_2, $email
     * @return void
     */

    public function editar($id, $nick, $pass, $tipo, $nombre, $apellido_1, $apellido_2, $email)
    {
        $sentencia = $this->db->prepare("UPDATE usuarios SET nk_usuario = ?, pass = ?, tipo = ?, nombre = ?, apellido1 = ?, apellido2 = ?, email= ? WHERE id = ?");
        $sentencia->execute(array(
            $nick,
            $pass,
            $tipo,
            $nombre,
            $apellido_1,
            $apellido_2,
            $email,
            $id
        ));
    }
}








?>