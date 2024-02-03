<?php
include_once 'DatabaseConnection.php';
include_once 'contactRepository.php';


if(isset($_GET['fname'])) {
    $contactsFname = $_GET['fname'];

    $contactRepository = new contactRepository();
    $contactRepository->deleteUser($contactsFname);

    header("location:dashboard.php");
    exit;
} else {
    
    echo "Invalid request!";
}
?>
