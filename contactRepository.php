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

        $sql = "SELECT * FROM contacts WHERE fname='$fname'";

        $statement = $conn->query($sql);
        $contacts = $statement->fetch();

        return $contacts;
    }

}