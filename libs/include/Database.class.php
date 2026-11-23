<?php

class Database
{
    public static $conn = null;

    public static function getConnection()
    {

        if (Database::$conn == null) {
                $servername = "mysql";
                $username = "user";
                $password = "password";
                $dbname = "db";


                $connection = mysqli_connect($servername, $username, $password, $dbname);
                if (!$connection) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                else{
                    Database::$conn=$connection;
                    return Database::$conn;
                }
            }
        
        else{
            return Database::$conn;
        }
    }
}
