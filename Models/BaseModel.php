<?php

class BaseModel
{
    protected function getConnection(){
        $servername = "127.0.0.1";
        $username = "root";
        $password = "samuel88";
        $dbname = 'tsa_dev';

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

}