<?php
class Database {
    public $conn;

    public function __construct() {
        include '../config/config.php'; // Include database configuration
        $this->conn = $conn;
    }
}
?>
