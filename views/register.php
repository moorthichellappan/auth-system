<?php
include '../controllers/AuthController.php'; // Include AuthController

$authController = new AuthController();
$authController->register(); // Handle registration logic if POST request
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <main>
        <form method="POST" action="register.php">
            <div><img class="main_logo" src="../assets/img/people-one-logo.png" alt="logo"></div>
            <div class="flex_col">
                <label>Username:</label>
                <input class="mt_5"type="text" name="username" required placeholder="enter username"><br>
            </div>
            <div class="flex_col">
                <label>Email:</label>
                <input class="mt_5"type="email" name="email" required placeholder="email@email.com"><br>
            </div>
            <div class="flex_col">
                <label>Password:</label>
                <input class="mt_5" type="password" name="password" required placeholder="enter password"><br>
            </div>
            <input class="mt_5" type="submit" value="Register">
        </form>
        <p class="mt_15 ">Do you have an account? <a href="login.php">Login here</a>.</p>
    </main>
</body>
</html>
