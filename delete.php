<?php
include_once 'DatabaseConnection.php';
include_once 'contactRepository.php';

// Check if fname is set in the URL
if(isset($_GET['fname'])) {
    $contactsFname = $_GET['fname'];

    $contactRepository = new contactRepository();
    $contactRepository->deleteUser($contactsFname);

    header("location:dashboard.php");
    exit;
} else {
    // Handle the case where 'fname' is not set in the URL
    echo "Invalid request!";
}
?>
