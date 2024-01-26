<?php
include_once('contactt.php')
include_once('DatabaseConnection.php');

class ContactRepository {
    private $connection;

    public function __construct() {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    public function insertContact($contact) {
        $conn = $this->connection;
        $id = $contact ->getId();
        $fname = $contact->getFname();
        $lname = $contact->getLname();
        $email = $contact->getEmail();
        $subject = $contact->getSubject();

        $sql = "INSERT INTO contacts (id,fname, lname, email, subject) VALUES (?, ?, ?, ?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$id.$fname, $lname, $email, $subject]);

        echo "<script>alert('Contact information added successfully!')</script>";
    }

    function getAllContacts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM contact";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $contact;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM contact WHERE id='$id'";

        $statement = $conn->query($sql);
        $contact = $statement->fetch();

        return $contact;
    }

    function updateContact($id,$fname,$lname,$email,$subject){
         $conn = $this->connection;

         $sql = "UPDATE contact SET fname=?, lname=?, email=?, subject=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$fname,$lname,$email,$subject]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteContact($id){
        $conn = $this->connection;

        $sql = "DELETE FROM contact WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}

    
}
?>
