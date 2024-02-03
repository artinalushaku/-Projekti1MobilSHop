<?php 

include_once 'DatabaseConnection.php';

class contactRepository {
    private $connection;

    function __construct() {
        $db = new DatabaseConnection();
        $this->connection = $db->getConnection();
    }



    function insertUser($contacts){

        $conn = $this->connection;

        $fname = $contacts->getFname();
        $lname = $contacts->getLname();
        $email = $contacts->getEmail();
        $subject = $contacts->getSubject();
       
        $sql = "INSERT INTO contacts (fname,lname,email,subject) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$fname,$lname,$email,$subject]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }
    function getAllContacts(){
        $conn = $this->connection;
    
        if ($conn !== null) {
            $sql = "SELECT * FROM contacts";
    
            $statement = $conn->query($sql);
            $contacts = $statement->fetchAll();
    
            return $contacts;
        } else {
            echo "Database connection is null.";
            return [];
        }
    }
   

    function getUserByFname($fname){
        $conn = $this->connection;

        $sql = "SELECT * FROM contacts WHERE fname=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$fname]);
        $contacts = $statement->fetch();

        return $contacts;
    }
    function updateUser($fname, $lname, $email, $subject) {
        $conn = $this->connection;
    
        $sql = "UPDATE contacts SET lname=?, email=?, subject=? WHERE fname=?";
    
        $statement = $conn->prepare($sql);
    
        $statement->execute([$lname, $email, $subject, $fname]);
    
        echo "<script>alert('Update was successful');</script>";
    }
    
    function deleteUser($fname) {
        $conn = $this->connection;
    
        $sql = "DELETE FROM contacts WHERE fname=?"; // Changed to use 'fname' column
    
        $statement = $conn->prepare($sql);
    
        $statement->execute([$fname]);
    
        echo "<script>alert('Delete was successful'); </script>";
    }
    
}


?>

