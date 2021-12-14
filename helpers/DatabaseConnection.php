<?php

require('../config/database.php');

class DatabaseConnection
{
    private static $connection = null;

    public static function getInstance()
    {
        if (self::$connection === null) {
            self::$connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
            if (self::$connection -> connect_errno) {
                echo "Failed to connect to MySQL: " . self::$connection -> connect_errno;
                exit();
              }
        }
        return self::$connection;
    }
}