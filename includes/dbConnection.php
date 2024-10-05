<?php
class dbConnection{
   private $host = "localhost";
   private $username = "root";
    private $password = "";
    private $dbname = "ics_e";

    public function connect() {
       $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo" Connected Succesfully";
        } catch (PDOException $e) {
            echo "Connection failed: ".$e->getMessage();
            
        }
        return $this->conn; 
    }
    public function getUserById($user_id) {
        
    }
}