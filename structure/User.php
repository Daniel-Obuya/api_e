<?php
require_once 'includes/dbConnection.php';
class User {
    private $conn;
    private $table_name = "users";

    public $id;
    public $fullname;
    public $username;
    public $password;
    public $email;
    public $gender;
    public $role;
    public $created_at;

    public function setFullName($fullname) {
        $this->fullname = $fullname;
    }

    // Getter for Full Name
    public function getFullName() {
        return $this->fullname;
    }

    // Setter for Email
    public function setEmail($email) {
        $this->email = $email;
    }

    // Getter for Email
    public function getEmail() {
        return $this->email;
    }

    // Setter for Username
    public function setUsername($username) {
        $this->username = $username;
    }

    // Getter for Username
    public function getUsername() {
        return $this->username;
    }

    // Setter for Gender
    public function setGender($gender) {
        $this->gender = $gender;
    }

    // Getter for Gender
    public function getGender() {
        return $this->gender;
    }

    // Setter for Role
    public function setRole($role) {
        $this->role = $role;
    }

    // Getter for Role
    public function getRole() {
        return $this->role;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (fullname,email,password,username,gender,role) VALUES (:fullname, :email, :password, :username, :gender, :role)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":fullname", $this->fullname);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":gender", $this->gender);
        $stmt->bindParam(":role", $this->role);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
   
}
?>