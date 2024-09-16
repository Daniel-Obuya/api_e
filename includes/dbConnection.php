<?php
class dbConnection{
    private $host = "localhost";
    private $db_name = "ics_e";
    private $username = "root";
    private $password = " ";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
    public function registerUser($fullname, $email, $username, $password, $gender, $role) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (fullname, email, username, password, gender, role, created) 
                  VALUES (:fullname, :email, :username, :password, :gender, :role, NOW())";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':role', $role);
    
        if($stmt->execute()) {
            return $this->conn->lastInsertId(); // Return the last inserted user ID
        } else {
            return false;
        }
    }
    
}