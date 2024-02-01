<?php
$contactsFname = $_GET['fname'];

include_once 'DatabaseConnection.php';
include_once 'contactRepository.php';

$contactRepository = new contactRepository();
$contacts = $contactRepository->getUserByFname($contactsFname);
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
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            margin: auto;
        }

        h3 {
            color: #333;
            margin-bottom: 20px; 
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h3>Edit User</h3>
        <input type="text" name="fname" value="<?=$contacts['fname']?>" readonly> <br>
        <input type="text" name="lname" value="<?=$contacts['lname']?>"> <br>
        <input type="text" name="email" value="<?=$contacts['email']?>"> <br>
        <input type="text" name="subject" value="<?=$contacts['subject']?>"> <br>
        <input type="submit" name="editBtn" value="Save">
    </form>
</body>
</html>

<?php 
if(isset($_POST['editBtn'])){
    $fname = $contacts['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    

    $contactRepository->updateUser($fname, $lname, $email, $subject);
    header("Location: dashboard.php");
    exit; 
}
?>
