<?php
// file: /model/proveedores.php

    /**
     * Clase Proveedor
     * 
     * Contiene el objeto Proveedor, perteneciente a la tabla proveedores de la base de datos
     */
    
    class Proveedor
    {
        /**
        * Id del Proveedor
        * @var int
        */

        private $id;

        /**
        * nombre del Proveedor
        * @var string
        */

        private $nombre;

        /**
        * URL de la imagen del Proveedor
        * @var string
        */

        private $imagen;
              
        public function __construct($id = NULL, $nombre = NULL, $imagen = NULL)
        {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->imagen = $imagen;
        }

        /**
        * Devuelve el Id del Proveedor
        * @return int
        */

        public function getId()
        {
            return $this->id;
        }


        /**
        * Devuelve el nombre del Proveedor
        * @return string
        */

        public function getnombre()
        {
            return $this->nombre;
        }

        /**
        * Cambia el valor del nombre del Proveedor
        * @return void
        */

        public function setnombre($nombre)
        {
            $this->nombre = $nombre;
        }


        /**
        * Devuelve la URL de la imagen del Proveedor
        * @return string
        */

        public function getimagen()
        {
            return $this->imagen;
        }

        /**
        * Cambia el valor de la URL de la imagen del Proveedor
        * @return void
        */
        
        public function setimagen($imagen)
        {
            $this->imagen = $imagen;
        }
    }
?>