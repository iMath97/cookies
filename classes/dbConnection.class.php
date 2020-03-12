<?php

class DBConnection {
    private $host = "127.0.0.1";
    private $user = "root";
    private $pw = "";
    private $db = "cookies";

    function connect(){
        $data = "mysql:host=$this->user; dbname=$this->db;";
        $con = new PDO($data, $this->user, $this->pw);
        $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $con;
    }
}

?>