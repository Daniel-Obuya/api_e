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
    public function getAllUsers() {
        $query = 'SELECT * FROM users';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
if ($stmt->execute()) {
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);// Fetch all users

        if ($users) {
            $userList = [];
            foreach ($users as $row) {
            $user = new User();
            $user->setFullName($row['fullname']);
            $user->setEmail($row['email']);
            $user->setUsername($row['username']);
            $user->setGender($row['gender']);
            $user->setRole($row['role']);
            $userList[] =$user; 
        } 
        return $userList;
        
     } else {
            return []; // No users found
        }
    } else {
        // Query failed
        echo "Error executing query";
        return null;
    }
}
}
