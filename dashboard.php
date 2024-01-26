<?php
session_start();


if (!isset($_SESSION['admin_id'])) {
    header("Location: "); 
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contactbtn'])) {
   
    $fname = $_POST[ 'fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    echo "<h2>Submitted Data:</h2>";
    echo "<p><strong>First Name:</strong> $fname</p>";
    echo "<p><strong>Last Name:</strong> $lname</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $subject</p>";
}
else {
    
}
?>