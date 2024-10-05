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
  <tr>
    <th>Full Name</th>
    <th>Email</th>
    <th>Username</th>
    <th>Gender</th>
    <th>Role</th>
</tr>

<?php
$count = 1;
foreach ($users as $user){
    ?>
    <tr>
        <td><?php echo $count++; ?></td>
        <td><?php echo htmlspecialchars($user->getFullName()); ?></td>
        <td><?php echo htmlspecialchars($user->getEmail()); ?></td>
        <td><?php echo htmlspecialchars($user->getUsername()); ?></td>
        <td><?php echo htmlspecialchars($user->getGender()); ?></td>
        <td><?php echo htmlspecialchars($user->getRole()); ?></td>
    </tr>
<?php
}
?>
</table>
</body>
</html>

<?php
} else {
    echo "User not found!";
}
?>
