<?php

$db = mysqli_connect('localhost', 'root', '', 'obs');

// Check for errors
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Get the form data
$title = mysqli_real_escape_string($db, $_POST['book-title']);
$author = mysqli_real_escape_string($db, $_POST['book-author']);
$quantity = mysqli_real_escape_string($db, $_POST['quantity']);



$sql = "INSERT INTO books (title, author, quantity)
        VALUES ('$title', '$author', '$quantity')";

if (mysqli_query($db, $sql)) {
  echo "Record added successfully. Thanks for choosing us";
} else {
  echo "Error adding record: " . mysqli_error($db);
}


mysqli_close($db);

?>
