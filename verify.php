<?php
include 'includes/dbConnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $verification_code = $_POST['verification_code'];

    // Check verification code in the database
    $db = new dbConnection();
    $conn = $db->connect();
    
    $query = 'SELECT * FROM users WHERE verification_code = :verification_code';
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':verification_code', $verification_code);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Update user as verified
        $update_query = 'UPDATE users SET is_verified = 1 WHERE id = :id';
        $update_stmt = $conn->prepare($update_query);
        $update_stmt->bindParam(':id', $user['id']);
        $update_stmt->execute();

        echo "Account verified successfully!";
    } else {
        echo "Invalid verification code!";
    }
}
?>