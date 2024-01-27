<?php
// Include the database connection file
include 'DatabaseConnection.php';

// Fetch products from the database
$sql = "SELECT * FROM produktet";
$result = $conn->query($sql);

// Check if there are products
if ($result->num_rows > 0) {
    echo '<div class="offers">';
    echo '<div class="box">';

    // Loop through each product
    while ($row = $result->fetch_assoc()) {
        echo '<div class="first">';
        echo '<a href="#">';
        echo '<img src="' . $row['image'] . '" alt="">';
        echo '</a>';
        echo '<h3>' . $row['name'] . '</h3>';
        echo '<h4>' . $row['price'] . '</h4>';
        echo '<button><a href="add_to_cart.php?product_id=' . $row['id'] . '">Shto në shportë</a></button>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
} else {
    echo "No products found.";
}

// Close the database connection
$conn->close();
?>
