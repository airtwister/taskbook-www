<?php

class DB {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance()
    {
        $connection_info = parse_ini_file(__DIR__."/../config/db.ini", true);
        $mysql = $connection_info['mysql'];

        if (!isset(self::$instance)) {

            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

            try {
                self::$instance = new PDO("mysql:host=".$mysql['host'].";dbname=".$mysql['dbname'], $mysql['user'], $mysql['password'], $pdo_options);
            } catch (PDOException $e) {
                exit("DB connection failed: " . $e->getMessage());
            }

        }

        return self::$instance;
    }
}

