<?php

    class Producto {
        
        /**
        * Id del producto
        * @var int
        */

        private $id;

        /**
        * Nombre del producto
        * @var string
        */

        private $nombre;

        /**
        * Url de la imagen del producto
        * @var string
        */

        private $imagen;

        /**
        * Codigo del proveedor del producto
        * @var int
        */

        private $cod_proveedor;

        /**
        * Descripcion del producto
        * @var string
        */

        private $descripcion;

        /**
        * Precio del producto
        * @var int
        */

        private $precio;

        public function __construct($id = NULL, $nombre = NULL, $imagen = NULL, $cod_proveedor = NULL, $descripcion = NULL, $precio = NULL)
        {
            $this->id            = $id;
            $this->nombre        = $nombre;
            $this->imagen        = $imagen;
            $this->cod_proveedor = $cod_proveedor;
            $this->descripcion   = $descripcion;
            $this->precio        = $precio;
        }

        /**
        * Devuelve el Id del producto
        * @return int
        */

        public function getID()
        {
            return $this->id;
        }


        /**
        * Devuelve el Nombre del producto
        * @return string
        */

        public function getNombre()
        {
            return $this->nombre;
        }

        /**
        * Cambia el Nombre del producto
        * @return void
        */
        
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }


        /**
        * Devuelve el enlace de la imagen del producto
        * @return string
        */

        public function getImagen()
        {
            return $this->imagen;
        }

        /**
        * Cambia el enlace de la imagen del producto
        * @return void
        */

        public function setImagen($imagen)
        {
            $this->imagen = $imagen;
        }


        /**
        * Devuelve el codigo del proveedor del producto
        * @return int
        */

        public function getCod_proveedor()
        {
            return $this->cod_proveedor;
        }

        /**
        * Cambia el codigo del proveedor del producto
        * @return void
        */

        public function setCod_proveedor($cod_proveedor)
        {
            $this->cod_proveedor = $cod_proveedor;
        }

    
        /**
        * Devuelve la descripcion del producto
        * @return string
        */

        public function getDescripcion()
        {
            return $this->descripcion;
        }

        /**
        * Cambia la descripcion del producto
        * @return void
        */

        public function setDescripcion($descripcion)
        {
            $this->descripcion = $descripcion;
        }


        /**
        * Devuelve el precio del producto
        * @return int
        */

        public function getPrecio()
        {
            return $this->precio;
        }

        /**
        * Cambia el precio del producto
        * @return void
        */

        public function setPrecio($precio)
        {
            $this->precio = $precio;
        }


    }






?>