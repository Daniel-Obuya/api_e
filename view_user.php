<?php
include_once 'includes/dbConnection.php';
include_once 'structure/User.php';


$user_id = $_GET['id'];


$database = new dbConnection();
$db = $database->connect();


$user = $database->getUserById($user_id);

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

<h2>User Details</h2>
<table border="1">
    <tr>
        <th>Full Name</th>
        <td><?php echo htmlspecialchars($user->getFullName()); ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo htmlspecialchars($user->getEmail()); ?></td>
    </tr>
    <tr>
        <th>Username</th>
        <td><?php echo htmlspecialchars($user->getUsername()); ?></td>
    </tr>
    <tr>
        <th>Gender</th>
        <td><?php echo htmlspecialchars($user->getGender()); ?></td>
    </tr>
    <tr>
        <th>Role</th>
        <td><?php echo htmlspecialchars($user->getRole()); ?></td>
    </tr>
</table>

</body>
</html>

<?php
} else {
    echo "User not found!";
}
?>
