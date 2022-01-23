<?php

class Database
{
    # Attributes
    const HOST     = 'localhost';
    const USERNAME = 'meelight';
    const PASSWORD = '282501mr';
    const DATABASE = 'prototipo';

    public function __construct() { }

    public static function connect()
    {
        try {
            $connection = new mysqli(
                self::HOST,
                self::USERNAME,
                self::PASSWORD,
                self::DATABASE
            );
            
            # Evaluate connection
            if ($connection->connect_error)
                die("Connection failed: " . $connection->connect_error);

            return $connection;
            
        } catch (\Throwable $error) {
            throw $error;
        }
    }
};
