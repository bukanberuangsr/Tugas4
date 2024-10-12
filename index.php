<?php
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
</head>
<body>
    <!-- <?php include "header.php" ?> -->
    <h1>Welcome to the EZRental!</h1>
    <p>What would you like to rent today?</p>
    <a href="views/list_barang.php">View Available Items</a>
    <a href="actions/logout.php">Logout</a>
</body>
</html>