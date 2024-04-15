<?php
// login.php
session_start();
include '../includes/db.php'; // Ensure you have a db.php file with your database connection

$login = $_POST['login'];
$password = $_POST['pass'];

$sql = "SELECT * FROM users WHERE login = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$login]); // Pass parameters directly to execute

$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
    if (password_verify($password, $result['pass'])) {
        // Set user session variables
        $_SESSION['user_id'] = $result['user_id']; // Assuming 'id' is the column name for user IDs in your database
        $_SESSION['user_name'] = $result['name']; // Assuming 'name' is the column name for user names
        $_SESSION['user_role'] = $result['role'];
        
        // Redirect based on role
        switch ($result['role']) {
            case 'admin':
                header("location: ../admins/views/home.php");
                exit;
            case 'teacher':
                header("location: ../teachers/views/home.php");
                exit;
            case 'student':
                header("location: ../students/views/home.php");
                exit;
        }
    } else {
        // If password is not correct, redirect to index.php
        $_SESSION['error'] = 'Incorrect password';
        header("Location: ../index.php");
        exit;
    }
} else {
    $_SESSION['error'] = 'User not found';
    header("Location: ../index.php");
    exit;
}
?>
