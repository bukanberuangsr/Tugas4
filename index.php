<?php
session_start();
if (!isset($_SESSION['username'])){
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/homepage.css">
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <a class="logout" href="logout.php">Logout</a>
    </nav>
    <div class="hero">
        <h1>Welcome to the EZRental!</h1>
        <p>What would you like to rent today?</p>
        <a href="item_list.php">View Available Items</a><br>
    </div>
</body>
</html>