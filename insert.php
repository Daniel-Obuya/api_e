<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once 'structure/User.php';
if ($_SERVER["REQUEST_METHOD"] ==  "POST") {
$fullname = htmlspecialchars($_POST['fullname']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$username = htmlspecialchars($_POST['username']);
$gender = htmlspecialchars($_POST['gender']);
$role = htmlspecialchars($_POST['role']);

// Generate verfication code
$verification_code = rand(100000, 999999); // 6-digit random code

if (!empty($fullname) && !empty($email)  && !empty($password)  && !empty($username)  && !empty($gender) && !empty($role)) {
$user = new User();

$user->fullname = $fullname;
$user->email = $email;
$user->password = password_hash($password, PASSWORD_BCRYPT);
$user->username = $username;
$user->gender = $gender;
$user->role = $role;

if ($user->create()) {
    sendVerificationEmail($email, $verfication_code);
    echo 'Registration Succesfull! Check your email for the verification code. <a href="verifyform.php">Verify your account here</a>';
} else {
    echo "Registration failed .";
}
} else {
    echo "Please fill in all fields.";
}

}


?>
</body>
</html>

