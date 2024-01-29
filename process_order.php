<?php
include_once("DatabaseConnection.php");

// Retrieve the connection object
$conn = $db->getDb();

if (!$conn) {
    die("Connection failed");
}

if (isset($_POST['btn'])) {
    $produktet_id = $_POST['produktet_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $produktet_image = $_POST['produktet_image'];

    try {
        // Insert the product-specific data into the "bleje" table
        $sql = "INSERT INTO bleje (id, name, price, discount, image)
                VALUES ('$produktet_id', '$name', '$price', '$discount', '$produktet_image')";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        echo "!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<style>
    .notification {
        position: fixed;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        background-color: #4CAF50;
        color: #fff;
        padding: 15px;
        text-align: center;
        z-index: 9999;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var notification = document.createElement("div");
        notification.className = "notification";
        notification.innerHTML = "Thank you for your order!";
        document.body.appendChild(notification);

        // Adjust the display time (in milliseconds)
        setTimeout(function () {
            notification.style.display = "none";
        }, 30000); // 3000 milliseconds = 3 seconds
    });
</script>

