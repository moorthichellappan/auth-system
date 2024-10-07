<?php
include '../controllers/AuthController.php'; // Include AuthController

$authController = new AuthController();
$authController->login(); // Handle login logic if POST request
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="login.php">
        <label>Username/Email:</label>
        <input type="text" name="login" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a>.</p>
</body>
</html>
