<?php
// Start the session
session_start();

// Connect to the MySQL database using PDO
try {
    $dbh = new PDO('mysql:host=localhost;dbname=obs', 'root', '');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: adminlogin1.php');
    exit;
}

// Retrieve the data from the database
$stmt = $dbh->query('SELECT * FROM books');
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display the data in a table format
echo "<table>";
echo "<thead><tr><th>id</th><th>price</th><th>quantity</th></tr></thead>";
echo "<tbody>";
foreach ($rows as $row) {
    echo "<tr><td>".$row['id']."</td><td>".$row['price']."</td><td>".$row['quantity']."</td></tr>";
}
echo "</tbody>";
echo "</table>";
?>
