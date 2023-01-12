<?php
// Connect to the database
$conn = mysqli_connect("127.0.0.1", "root", "", "riedlente");

// Get the form data
$action = $_POST['action'];
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$image_url = $_POST['image_url'];

// Check the action and perform the corresponding database query
if ($action === 'add') {
  $query = "INSERT INTO products (name, price, id, aprasymas, image_url) VALUES ('$name', '$price', '$id', '$description', '$image_url')";
} else if ($action === 'update') {
  $query = "UPDATE products SET name = '$name', price = '$price', aprasymas = '$description', image_url = '$image_url', id = '$id' WHERE id = '$id'";
} else if ($action === 'delete') {
  $query = "DELETE FROM products WHERE id = '$id'";
}

// Execute the query
mysqli_query($conn, $query);

// Redirect back to the admin page
header('Location: admin.php');
?>
