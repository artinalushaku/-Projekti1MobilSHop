<?php
function checkAdmin(){


    // Check if the user has admin role
    if ($_SESSION['role'] !== 'admin'){
        // If not an admin, redirect or perform another action
        header("Location: unauthorized.php");
        exit();
    }
}
?>
