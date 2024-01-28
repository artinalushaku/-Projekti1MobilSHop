
<?php
include("DatabaseConnection.php");

// Retrieve the connection object
$conn = $db->getConnection();

// Check if the connection is successful
if (!$conn) {
    die("Connection failed");
}

try {
    $sql = "INSERT INTO bleje (id, name, price, discount, image)
        VALUES
        ( 2, 'Apple iPhone 11, 64GB, Black', 34, 10, 'iphone.webp')";


    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo "Data inserted successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$conn = null;
?>
