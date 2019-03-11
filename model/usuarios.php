<?php
// file: /model/usuarios.php

     /**
     * Clase Usuario
     * 
     * Contiene el objeto Usuario, perteneciente a la tabla Usuarios de la base de datos
     */

    class Usuario
    {
        /**
        * Id del usuario
        * @var int
        */

        private $id;

        /**
        * Nick del usuario
        * @var string
        */

        private $login;

        /**
        * Contraseña del usuario
        * @var string
        */

        private $pass;
           
        /**
        * Tipo de usuario 
        * @var string
        */

        private $tipo;

        /**
        * Nombre del usuario
        * @var string
        */

        private $nombre;

        /**
        * Primer apellido del usuario
        * @var string
        */

        private $apellido_1;

        /**
        * Segundo apellido del usuario
        * @var string
        */

        private $apellido_2;

        /**
        * Email del usuario
        * @var string
        */

        private $email;

        
        public function __construct($id = NULL, $login = NULL, $pass = NULL, $tipo = NULL, $nombre = NULL, $apellido_1 = NULL, $apellido_2 = NULL, $email = NULL)
        {
            $this->id         = $id;
            $this->login      = $login;
            $this->pass       = $pass;
            $this->tipo       = $tipo;
            $this->nombre     = $nombre;
            $this->apellido_1 = $apellido_1;
            $this->apellido_2 = $apellido_2;
            $this->email      = $email;
        }

        /**
        * Devuelve el Id del Usuario
        * @return int
        */

        public function getId()
        {
            return $this->id;
        }


        /**
        * Devuelve el Login del Usuario
        * @return string
        */

        public function getLogin()
        {
            return $this->login;
        }

        /**
        * Cambia el valor del login del Usuario
        * @return void
        */

        public function setLogin($login)
        {
            $this->login = $login;
        }


        /**
        * Devuelve la Contraseña del Usuario
        * @return string
        */

        public function getPass()
        {
            return $this->pass;
        }

        /**
        * Cambia el valor de la Contraseña del Usuario
        * @return void
        */
        
        public function setPass($pass)
        {
            $this->pass = $pass;
        }


        /**
        * Devuelve el Tipo del Usuario
        * @return string
        */

        public function getTipo()
        {
            return $this->tipo;
        }

        /**
        * Cambia el valor del Tipo del Usuario
        * @return void
        */
        
        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }


        /**
        * Devuelve el Nombre del Usuario
        * @return string
        */

        public function getNombre()
        {
            return $this->nombre;
        }

        /**
        * Cambia el valor del Nombre del Usuario
        * @return void
        */
        
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }


        /**
        * Devuelve el Primer apellido del Usuario
        * @return string
        */

        public function getApellido_1()
        {
            return $this->apellido_1;
        }

        /**
        * Cambia el valor del Primer apellido del Usuario
        * @return void
        */
        
        public function setApellido_1($apellido_1)
        {
            $this->apellido_1 = $apellido_1;
        }


        /**
        * Devuelve el Segundo apellido del Usuario
        * @return string
        */

        public function getApellido_2()
        {
            return $this->apellido_2;
        }

        /**
        * Cambia el valor del Segundo apellido del Usuario
        * @return void
        */
        
        public function setApellido_2($apellido_2)
        {
            $this->apellido_2 = $apellido_2;
        }


        /**
        * Devuelve el Email del Usuario
        * @return string
        */

        public function getEmail()
        {
            return $this->email;
        }

        /**
        * Cambia el valor del Nick del Usuario
        * @return void
        */
        
        public function setEmail($email)
        {
            $this->email = $email;
        }
    }
    



?>