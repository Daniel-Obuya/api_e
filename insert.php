<?php
include'includes/dbConnection.php';
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$role = $_POST['role'];


$database = new dbConnection($db_type, $db_host, $db_port, $db_user, $db_pass, $db_name);
$db = $database->getConnection();


$user_id = $database->registerUser($fullname, $email, $username, $password, $gender, $role);

if ($user_id) {
   
    header("Location: view_user.php?id=" . $user_id);
    exit();
} else {
    echo "Registration failed!";
}
?>