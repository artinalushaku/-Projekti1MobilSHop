<?php
// Include the database connection file
include 'DatabaseConnection.php';

// Check if the product_id is set in the URL
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // Fetch the selected product from the database
    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = $conn->query($sql);

    // Check if the product exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Now you can use $row['name'], $row['price'], etc. to add the product to the cart
        // You may also want to redirect the user to the cart page or display a success message
        echo "Product added to cart: " . $row['name'];
    } else {
        echo "Product not found.";
    }
} else {
    echo "Product ID not specified.";
}

// Close the database connection
$conn->close();
?>
