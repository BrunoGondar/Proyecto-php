<?php
// file: /model/compras.php

    /**
     * Clase Compra
     * 
     * Contiene el objeto Compra, perteneciente a la tabla Compras de la base de datos
     */
    
    class Compra
    {
        /**
        * Id de la compra
        * @var int
        */

        private $id;

        /**
        * Codigo del usuario que realiza la compra
        * @var int
        */

        private $cod_usuario;

        /**
        * Precio de la compra
        * @var int
        */
        
        private $precio;

        /**
        * fecha en la compra
        * @var string
        */

        private $fecha;

        public function __construct($id, $cod_usuario, $precio, $fecha)
        {
            $this->id          = $id;
            $this->cod_usuario = $cod_usuario;
            $this->precio      = $precio;
            $this->fecha       = $fecha;
        }
        
        /**
        * Devuelve el Id de la compra
        * @return int
        */

        public function getID()
        {
            return  $this->id;
        }

        /**
        * Devuelve el codigo del usuario que realiza la compra
        * @return int
        */

        public function getCod_usuario()
        {
            return $this->cod_usuario;
        }

        /**
        * Cambia el valor del codigo del Usuario que realiza la compra
        * @return void
        */

        public function setCod_usuario($cod_usuario)
        {
            $this->cod_usuario = $cod_usuario;
        }


        /**
        * Devuelve el precio de la compra
        * @return int
        */

        public function getPrecio()
        {
            return $this->precio;
        }

        /**
        * Cambia el precio de la compra
        * @return void
        */

        public function setPrecio($precio)
        {
            $this->precio = $precio;
        }

        /**
        * Devuelve la Fecha de la compra
        * @return string
        */

        public function getFecha()
        {
            return $this->fecha;
        }

        /**
        * Cambia el valor de la fecha de la compra 
        * @return void
        */

        public function setFecha($fecha)
        {
            $this->fecha = $fecha;
        }
    }
?>