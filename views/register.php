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
        <form method="POST" action="register.php" onsubmit="return validatePassword()">
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
                <input class="mt_5" type="password" name="password" id="password" required placeholder="enter password"><br>
                <small class="password-cond">
                    <ul>
                        <li>At least 8 characters long</li>
                        <li>Contains an uppercase letter</li>
                        <li>Contains a lowercase letter</li>
                        <li>Contains a number</li>
                        <li>Contains a special character (e.g., @, $, !, %, etc.)</li>
                    </ul>
                </small>    
                <div id="password-error" style="color: red; font-size: 0.875rem; margin-top: 10px;"></div>         
            </div>
            <input class="mt_5" type="submit" value="Register">
        </form>
        <p class="mt_15 ">Do you have an account? <a href="login.php">Login here</a>.</p>
    </main>
    <script>
        function validatePassword() {
            const password = document.getElementById('password').value;
            const errorDiv = document.getElementById('password-error');
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

            if (!passwordRegex.test(password)) {
                errorDiv.textContent = "Password must meet all the listed criteria.";
                return false; // Prevent form submission
            } else {
                errorDiv.textContent = ""; // Clear the error message if valid
            }
            return true;
        }
    </script>
</body>
</html>
