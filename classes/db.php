<?php

class db 
{
    private function __contruct() {
    }

    public static function conectar()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "inovacon";

        try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            
            return $conn; 
        }

        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
