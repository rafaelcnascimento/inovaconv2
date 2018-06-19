<?php

class db 
{
    private function __contruct() {
    }

    public static function conectar($banco)
    {
        if ($banco == 1) 
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
               
           }

           catch(PDOException $e)
           {
               echo "Connection failed: " . $e->getMessage();
           }
        } 
        else 
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "wifitable";

            try 
            {
                $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                
            }

            catch(PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
            }
        }

        return $conn; 
    }
}
