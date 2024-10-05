<?php
include_once 'includes/dbConnection.php';
include_once 'structure/User.php';




$database = new dbConnection();
$db = $database->connect();


$user = $database->getAllUsers();

if ($user) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>
<body>

<h2>Registered Users</h2>
<table border="1">
  

</body>
</html>

<?php
} else {
    echo "User not found!";
}
?>
