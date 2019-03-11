<?php
// file: /core/PDOConnection.php

    /**
     * Clase PDOConnection
     *
     *  Clase que implementa conexión con la base de datos
     *  Al ser singleton, se comprueba si ya se ha establecido una conexion con la base de datos, si no, se conecta a ella.
     */

    class PDOConnection
    {

        private static $dbhost = "localhost";

        private static $dbname = "proyecto";

        private static $dbuser = "root";

        private static $dbpass = "";

        private static $db_singleton = null;

        public static function getInstance()
        {
            if (self::$db_singleton == null) {
                self::$db_singleton = new PDO("mysql:host=" . self::$dbhost . ";dbname=" . self::$dbname . ";charset=utf8", // connection string
                self::$dbuser, self::$dbpass, array( // options
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ));
            }
            return self::$db_singleton;
        }
    }
?>