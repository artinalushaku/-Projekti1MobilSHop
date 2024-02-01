<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <table border="1">
             <tr>
                 <th>fname</th>
                 <th>lname</th>
                 <th>email</th>
                 <th>message</th>
                 
                 
             </tr>

             <?php 
            include_once 'contactRepository.php';

            $contactRepository = new contactRepository();
            
            // Explicitly start the connection if needed
            $db = new DatabaseConnection();
            $db->startConnection();
            
            $contacts = $contactRepository->getAllContacts();
                foreach($contacts as $contact){
                    echo 
                    "
                    <tr>
                        <td>{$contact['fname']}</td>
                        <td>{$contact['lname']}</td>
                        <td>{$contact['email']}</td>
                        <td>{$contact['subject']}</td>
                        <td><a href='edit.php?fname={$contact['fname']}'>Edit</a></td>
                        <td><a href='delete.php?fname={$contact['fname']}'>Delete</a></td>
                    </tr>
                    ";
             }

             
             
             ?>
    </table>
</body>
</html>