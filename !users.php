<?php
// Database connection setup
include('DatabaseConnection.php');
$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->startConnection();

// Function to add a user
function addUser($conn, $username, $lastname, $email, $password, $role = 'user')
{
    try {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (Username, Lastname, Email, Password, Role) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username, $lastname, $email, $hashedPassword, $role]);
        return true;
    } catch (PDOException $e) {
        // Handle the error (e.g., duplicate email or database issue)
        return false;
    }
}


// Function to make a user an admin
function makeAdmin($conn, $userId)
{
    try {
        $sql = "UPDATE users SET Role = 'admin' WHERE Id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$userId
    ]);
    return true;
} catch (PDOException $e) {
    // Handle the error
    return false;
}
}

// Example usage:
// Add a normal user
addUser($conn, 'normaluser', 'Normal', 'user@example.com', password_hash('password', PASSWORD_DEFAULT));

// Add an admin user
addUser($conn, 'adminuser', 'Admin', 'admin@example.com', password_hash('adminpassword', PASSWORD_DEFAULT), 'admin');

// Make a specific user an admin (replace 1 with the user's actual ID)
makeAdmin($conn, 1);
?>
