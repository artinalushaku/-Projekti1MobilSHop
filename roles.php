<?php
include_once 'users.php'; 
include_once 'DatabaseConnection2.php'; 

if (isset($_POST['save'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    if (isset($users) && is_array($users)) { 
        foreach ($users as $user) {
            if ($user['firstname'] === $username && $user['password'] === $password) {
                
                if ($user['role'] === 'admin') {
                  
                    header("Location: dashboard2.php");
                    exit;
                } else {
                   
                    echo "You don't have permission to access the dashboard.";
                    exit;
                }
            }
        }
    } else {
       
        echo "Error: User data not available.";
    }

    
    echo "Invalid username or password.";
}
?>
