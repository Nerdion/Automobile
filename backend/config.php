<?php

class Database {
    protected $servername;
    protected $username;
    protected $password;
    protected $dbname;
    protected $con;
    
    function getConnection() {
        
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "automobile";
        // Create connection
        $con = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        return $con;
    }
}

?>