<?php

    class Conectar
    {
        private $driver;
        private $host, $user, $pass, $database, $charset;
        
        public function __construct()
        {
            $db_config = require_once 'config/database.php';
            $this->driver  = $db_config["driver"];
            $this->host    = $db_config["host"];
            $this->user    = $db_config["user"];
            $this->pass    = $db_config["pass"];
            $this->charset = $db_config["charset"];
        }

        public function conexion()
        {
            if ($this->driver == "mysql" || $this->driver == null) {
                $mysqli = new mysqli($this->host, $this->user, $this->pass, $this->database);
                $mysqli->query("SET NAMES '" . $this->charset . "'");
            }
            return $mysqli;
        }
    }
 

?>
