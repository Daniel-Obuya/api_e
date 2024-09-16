<?php
class User {
    private $fullname;
    private $email;
    private $role;
    private $gender;
    private $dateJoined;

    public function __construct($username, $email, $role, $gender, $dateJoined) {
        $this->username = $username;
        $this->email = $email;
        $this->role = $role;
        $this->gender = $gender;
        $this->dateJoined = $dateJoined;
    }
    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getRole() {
        return $this->role;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getDateJoined() {
        return $this->dateJoined;
    }
}
?>