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
    <main>
        <form method="POST" action="login.php">
            <div><img class="main_logo" src="../assets/img/people-one-logo.png" alt="logo"></div>
            <div class="flex_col">
                <label>Username/Email</label>
                <input class="mt_5" type="text" name="login" required placeholder="email@email.com">
            </div>
           <div class="flex_col">
            <label>Password</label>
            <input class="mt_5" type="password" name="password" required placeholder="enter password">
           </div>
            <input class="mt_5" type="submit" value="Login">
        </form>
        <p class="mt_15 ">Don't have an account? <a href="register.php">Register here</a>.</p>
    </main>
</body>

</html>
