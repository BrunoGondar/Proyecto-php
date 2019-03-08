<?php

    class Entidad
    {
        private $tabla, $db, $conectar;

        public function __construct($tabla)
        {
            $this->tabla = (string) $tabla;

            require_once 'conexion_bd.php';
            $this->conectar = new Conectar();
            $this->db = $this->conectar->conexion();
        }

        public function getConectar()
        {
            return $this->conectar;
        }

        public function db()
        {
            return $this->bd;
        }

        public function getAll()
        {
            $query = $this->db->query("SELECT * FROM $this->table ORDER BY id DESC");
            while ($row = $query->fetch_object()) {
                $resulSet[] = $row;
            }

            return $resulSet;
        }

        public function getById($id)
        {
            $query = $this->db->query("SELECT * FROM $this->table WHERE id = $id");
            
            if ($row = $query->fetch_object()) {
                $resulSet = $row;
            }

            return $resulSet;
        }

        public function getBy($columna, $valor)
        {
            $query = $this->db->query("SELECT * FROM $this->table WHERE $columna = '$valor'");

            while ($row = $query->fetch_object()) {
                $resulSet[] = $row;
            }

            return $resulSet;
        }

        public function deleteById($id)
        {
            $query = $this->db->query("DELETE FROM $this->table WHERE id = $id");

            return $query;
        }

        public function deleteBy($columna, $valor)
        {
            $query = $this->db->query("DELETE FROM $this->table WHERE $columna = '$valor'");

            return $query;
        }
    }
    



?>