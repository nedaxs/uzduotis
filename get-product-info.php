<?php
    // Connect to the database
    $conn = mysqli_connect("127.0.0.1", "root", "", "riedlente");
    
    // Get the product id from the GET data
    $productId = $_GET['productId'];
    
    // Query the product information from the database
    $query = "SELECT `aprasymas` FROM products WHERE id = $productId";
    $result = mysqli_query($conn, $query);
    $productInfo = mysqli_fetch_assoc($result);
    
    // Return the product information in JSON format
    echo json_encode($productInfo);
?>
