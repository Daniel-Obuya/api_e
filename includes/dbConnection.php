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
        $query = 'SELECT * FROM users WHERE userId = :userId';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':userId', $user_id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $user = new User();
            $user->setFullName($row['fullname']);
            $user->setEmail($row['email']);
            $user->setUsername($row['username']);
            $user->setGender($row['gender']);
            $user->setRole($row['role']);
            return $user;
        } else {
            return null; // user not found
        }
    }
    }
