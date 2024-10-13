<?php
session_start();
include 'db.php'; // Sambungkan ke database

// Cek apakah user sudah login
if (isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

$error_message = '';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa apakah username dan password cocok di database
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    // Jika username ditemukan dan password cocok
    if ($user && password_verify($password, $user['userpass'])) {
        $_SESSION['username'] = $user['username'];
        header('Location: index.php');
        exit();
    } else {
        $error_message = 'Username or Password is Incorrect!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login.css">
    <title>Login</title>
</head>
<body>
    <h1 class="header">Login</h1>
    <?php
    if ($error_message) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>
    <form action="" method="post">
        <label for="username">Username:</label><br>
        <input class="input" type="text" name="username" required>
        <br><br>
        <label for="password">Password:</label><br>
        <input class="input" type="password" name="password" required>
        <br><br>
        <input class="submit" type="submit" name="submit" value="Login">
    </form>
    <p>Don't have an account yet? <a href="register.php">Register here</a></p>
</body>
</html>
