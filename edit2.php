<?php
$usersId = isset($_GET['id']) ? $_GET['id'] : null;

include_once 'DatabaseConnection2.php';
include_once 'usersRepository.php';

$usersRepository = new UsersRepository();
$users = $usersRepository->getUsersById($usersId);

if (!$users) {
    echo "User not found.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="id">ID:</label>
        <input type="text" name="id" value="<?= $users['id'] ?>" readonly> <br>

        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" value="<?= $users['firstname'] ?>"> <br>

        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" value="<?= $users['lastname'] ?>"> <br>

        <label for="password">Password:</label>
        <input type="text" name="password" value="<?= $users['password'] ?>"> <br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="text" name="confirm_password" value="<?= $users['confirm_password'] ?>"> <br>

        <label for="role">Role:</label>
        <input type="text" name="role" value="<?= $users['role'] ?>" > <br>

        <input type="submit" name="editBt" value="Save">
    </form>
</body>
</html>


<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editBt'])) {
    $id = $users['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = $_POST['role'];

    $usersRepository->updateUsers($id, $firstname, $lastname, $password, $confirm_password, $role);
    header("Location: dashboard2.php");
    exit; 
}
?>
