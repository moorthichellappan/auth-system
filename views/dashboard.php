<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirect to login if not authenticated
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <main>        
        <form method="POST" action="logout.php">
            <div><img class="main_logo" src="../assets/img/people-one-logo.png" alt="logo"></div>
            <h4 class="msg-dash">Welcome, <?php echo $_SESSION['username']; ?>!</h4>
            <input class="mt_5" type="submit" value="Logout">
        </form>
    </main>
</body>
</html>
