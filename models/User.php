<?php
require_once '../config/config.php'; // Include database configuration

class User {
    private $conn;

    public function __construct() {
        // Use the database connection from config.php
        $this->conn = $GLOBALS['conn'];
    }

    // Register a new user
    public function register($username, $email, $password) {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // Check if the username or email already exists
        $stmt = $this->conn->prepare('SELECT id FROM users WHERE username = ? OR email = ?');
        $stmt->bind_param('ss', $username, $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // Username or email already exists
            return 'exists';
        } else {
            // Insert the new user into the database
            $stmt = $this->conn->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');
            $stmt->bind_param('sss', $username, $email, $passwordHash);
            return $stmt->execute();
        }
    }

    // Find user by username or email
    public function findUserByLogin($login) {
        // Find user by username or email
        $stmt = $this->conn->prepare('SELECT id, username, password FROM users WHERE username = ? OR email = ?');
        $stmt->bind_param('ss', $login, $login);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc(); // Fetch the user data
    }
}
?>
