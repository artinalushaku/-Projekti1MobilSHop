<?php
session_start();
include ('sessionverification.php');
checkAdmin();

// Include the DatabaseConnection class
include('Databaseconnection.php');

// Create an instance of the DatabaseConnection class
$databaseConnection = new DatabaseConnection();

// Attempt to start the database connection
$conn = $databaseConnection->startConnection();

// Fetch user data if the connection is successful
if ($conn) {
    function getUsersData($conn)
    {
        try {
            $sql = "SELECT * FROM user";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // Fetch all users
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $users;
        } catch (PDOException $e) {
            // Handle database query error
            echo "Error: " . $e->getMessage();
            return array(); // Return an empty array if an error occurs
        }
    }

    // Fetch user data
    $users = getUsersData($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <table >
    <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
            </thead>
            <tbody>
    <?php
            if (!empty($users)) {
                // Loop through each user and display their information in a table row
                foreach ($users as $user) {
                    echo '<tr>';
                    echo '<td>' . $user['Id'] . '</td>';
                    echo '<td>' . $user['Username'] . '</td>';
                    echo '<td>' . $user['Lastname'] . '</td>';
                    echo '<td>' . $user['Email'] . '</td>';
                    echo '<td>' . $user['Role'] . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="5">No users found</td></tr>';
            }
     ?>
   </tbody>
    </table>
 
</body>
</html>
