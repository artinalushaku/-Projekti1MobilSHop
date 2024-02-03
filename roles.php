<?php
include_once 'users.php'; // Include the repository to get user data
include_once 'DatabaseConnection2.php'; // Include the database connection class

if (isset($_POST['save'])) {
    // Assuming username and password are posted via form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Search for the user in your user data
    if (isset($users) && is_array($users)) { // Check if $users is defined and an array
        foreach ($users as $user) {
            if ($user['firstname'] === $username && $user['password'] === $password) {
                // If the user is found, redirect to the dashboard based on their role
                if ($user['role'] === 'admin') {
                    // If the user is an admin, redirect to dashboard
                    header("Location: dashboard2.php");
                    exit;
                } else {
                    // If the user is not an admin, you can show a message or redirect to a different page
                    echo "You don't have permission to access the dashboard.";
                    exit;
                }
            }
        }
    } else {
        // If $users is not defined or not an array
        echo "Error: User data not available.";
    }

    // If the user is not found in the user data, show an error message or redirect to login page
    echo "Invalid username or password.";
}
?>
