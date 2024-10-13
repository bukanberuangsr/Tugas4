<?php
include 'db.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$query = "SELECT * FROM items WHERE available = 1";
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Items List</title>
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <a class="logout" href="logout.php">logout</a>
    </nav>
    <h1>Currently Available Items</h1>
    <p>This is our currently available items. <br> Items change every Monday at 00:00 WIB</p>
    <ul>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <li>
            <strong><?php echo htmlspecialchars($row['name']); ?></strong>: <?php echo htmlspecialchars($row['description']); ?> <br>
            <a href="item_detail.php?id=<?php echo $row['id']; ?>">View Details</a>
        </li>
        <?php endwhile; ?>
    </ul>
</body>
</html>