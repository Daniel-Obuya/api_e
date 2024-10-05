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

    public function __construct() {
        $database = new dbConnection();
        $this->conn = $database->connect();
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