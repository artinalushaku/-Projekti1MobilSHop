<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    

    <table border="1">
             <tr>
             <th>id</th>
                 <th>firstname</th>
                 <th>lastname</th>
                 <th>password</th>
                 <th>confirm_password</th>
                 <th>role</th>
                 
                 
             </tr>

             <?php 
            include_once 'usersRepository.php';

            $usersRepository = new usersRepository();
            
           
            $db = new DatabaseConnection();
            $db->startConnection();
            
            $users = $usersRepository->getAllUsers();
                foreach($users as $user){
                    echo 
                    "
                    <tr>
                        <td>{$user['id']}</td>
                        <td>{$user['firstname']}</td>
                        <td>{$user['lastname']}</td>
                        <td>{$user['password']}</td>
                        <td>{$user['confirm_password']}</td>
                        <td>{$user['role']}</td>

                        <td><a href='edit2.php?id={$user['id']}'>Edit</a></td>
                        <td><a href='delete2.php?id={$user['id']}'>Delete</a></td>
                    </tr>
                    ";
             }

             
             
             ?>
    </table>
</body>
</html>