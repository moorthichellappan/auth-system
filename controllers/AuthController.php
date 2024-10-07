<?php
include '../models/User.php'; // Include User model

class AuthController {
    // Handle user registration
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userModel = new User();
            // Call register method in User model
            $registrationResult = $userModel->register($username, $email, $password);
            if ($registrationResult === true) {
                // Redirect to login after successful registration
                header('Location: login.php');
                exit;
            } elseif ($registrationResult === 'exists') {
                echo "User already exists.";
            } else {
                echo "Registration failed.";
            }
        }
    }

    // Handle user login
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $login = $_POST['login']; // Could be username or email
            $password = $_POST['password'];

            $userModel = new User();
            // Find user by username or email
            $user = $userModel->findUserByLogin($login);

            if ($user && password_verify($password, $user['password'])) {
                // Start a session and set session variables
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                // Redirect to dashboard after successful login
                header('Location: dashboard.php');
                exit;
            } else {
                echo "Invalid login credentials.";
            }
        }
    }

    // Handle user logout
    public function logout() {
        session_start();
        session_unset(); // Unset all session variables
        session_destroy(); // Destroy the session
        // Redirect to login page after logout
        header('Location: login.php');
        exit;
    }
}
?>
