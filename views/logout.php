<?php
include '../controllers/AuthController.php'; // Include AuthController

$authController = new AuthController();
$authController->logout(); // Handle logout logic
?>
