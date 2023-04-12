<?php

class Database {

    public static function Connect() {
        $server = "localhost";
        $user = "root";
        $pass = "";
        $database = "ibox";

        $conn = mysqli_connect($server, $user, $pass, $database);
        $conn->query("SET NAMES 'utf8'");
        return $conn;

        if (!$conn) {
            die("<script>alert('Connection Failed.')</script>");
        }
    }

}

?>
