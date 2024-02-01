<?php

$usersId = isset($_GET['id']) ? $_GET['id'] : null;

include_once 'usersRepository.php';

$usersRepository = new UsersRepository();

$usersRepository->deleteUsers($usersId);

header("location:dashboard2.php");

?>
