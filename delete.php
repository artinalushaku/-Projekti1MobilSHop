<?php

$contactsFname = $_GET['fname'];

include_once 'DatabaseConnection.php';
include_once 'contactRepository.php';


$contactRepository = new contactRepository();

$contactRepository->deleteUser($contactsFname);

header("location:dashboard.php");


?>