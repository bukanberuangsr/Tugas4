<?php
include 'db.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Check if 'id' is set in the URL
if (isset($_GET['id'])) {
    $item_id = intval($_GET['id']);

    // Fetch item details based on the 'id'
    $query = "SELECT * FROM items WHERE id = $item_id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $item = mysqli_fetch_assoc($result);
    } else {
        echo "Item not found or unavailable.";
        exit;
    }
} else {
    echo "Invalid item ID.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($item['name']); ?> - Item Details</title>
    <link rel="stylesheet" href="css/item_detail.css">
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="item_list.php">Back to Item List</a>
        <a class="logout" href="logout.php">Logout</a>
    </nav>
    <h1><?php echo htmlspecialchars($item['name']); ?></h1>
    <p><?php echo htmlspecialchars($item['description']); ?></p>
    <p><strong>Availability:</strong> <?php echo $item['available'] ? 'Available' : 'Not Available'; ?></p>
    <p><strong>Amount:</strong> <?php echo $item['available']; ?></p>
</body>
</html>
