<?php
// file: model/UsuarioMapper.php 

require_once (__DIR__ . "/../core/PDOConnection.php");

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
    * @var PDO
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
        $sentencia = $this->db->prepare("INSERT INTO usuarios(login, pass, tipo, nombre, apellido1, apellido2, email)
                                                VALUES (?,?,?,?,?,?,?)");

        $sentencia->execute(array(
            $user->getLogin(),
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
     * @param $id, $login, $pass, $tipo, $nombre, $apellido_1, $apellido_2, $email
     * @return void
     */

    public function editar($id, $nick, $pass, $tipo, $nombre, $apellido_1, $apellido_2, $email)
    {
        $sentencia = $this->db->prepare("UPDATE usuarios SET login = ?, pass = ?, tipo = ?, nombre = ?, apellido1 = ?, apellido2 = ?, email= ? WHERE id = ?");
        $sentencia->execute(array(
            $login,
            $pass,
            $tipo,
            $nombre,
            $apellido_1,
            $apellido_2,
            $email,
            $id
        ));
    }

    /**
     * Comprueba si existe un usuario 
     *
     * @param $id
     * @return boolean
     */
    public function existe($id)
    {
        $sentencia = $this->db->prepare("SELECT count(id) FROM usuarios where id=?");
        $sentencia->execute(array(
            $id
        ));
        
        if ($sentencia->fetchColumn() > 0) {
            return true;
        }
    }

    /**
     * Comprueba si el usuario es valido
     *
     * @param $id, $pass
     * @return boolean
     */
    public function valido($id, $pass)
    {
        $sentencia = $this->db->prepare("SELECT count(id) FROM usuarios where login=? and pass=?");
        $sentencia->execute(array(
            $login,
            $pass
        ));
        
        if ($sentencia->fetchColumn() > 0) {
            return true;
        }
    }

    /**
     * Devuelve los datos de un usuario 
     *
     * @param $login
     * @return Usuario
     */
    public function getDatos($login)
    {
        $stmt = $this->db->prepare("SELECT * FROM usuarios where login=?");
        $stmt->execute(array(
            $login
        ));
        
        $toret_db = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        
        $user = null;
        
        foreach ($toret_db as $datos) {
            $user = new Usuario($datos['id'], $datos['login'], $datos['tipo'], $datos['nombre'], $datos['apellido1'], $datos['apellido2'], $datos['email']);
        }
        
        return $user;
    }

    /**
     * Devuelve todos los usuarios 
     *
     * 
     * @return mixed Usuario
     */
    public function getUsuarios()
    {
        $sentencia = $this->db->query("SELECT * FROM usuarios");
        $toret_db = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        
        $users = array();
        
        foreach ($toret_db as $user) {
            array_push($users, new Usuario($user['id'], $user['login'], $user['tipo'], $user['nombre'], $user['apellido1'], $user['apellido2'], $user['email']));
        }
        
        return $users;
    }
}
?>