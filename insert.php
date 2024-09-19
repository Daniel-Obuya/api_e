<?php
require_once 'structure/User.php';
if ($_SERVER["REQUEST_METHOD"] ==  "POST") {
$fullname = htmlspecialchars($_POST['fullname']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$username = htmlspecialchars($_POST['username']);
$gender = htmlspecialchars($_POST['gender']);
$role = htmlspecialchars($_POST['role']);

if (!empty($fullname) && !empty($email)  && !empty($password)  && !empty($username)  && !empty($gender) && !empty($role)) {
$user = new User();

$user->fullname = $fullname;
$user->email = $email;
$user->password = password_hash($password, PASSWORD_BCRYPT);
$user->username = $username;
$user->gender = $gender;
$user->role = $role;

if ($user->create()) {
    echo "User registered succesfully!";
} else {
    echo "Failed to register user .";
}
} else {
    echo "Please fill in all fields.";
}

}


?>