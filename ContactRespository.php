<?php
include_once('DatabaseConnection.php');

class ContactRepository {
    private $connection;

    public function __construct() {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    public function insertContact($contact) {
        $conn = $this->connection;

        $fname = $contact->getFname();
        $lname = $contact->getLname();
        $email = $contact->getEmail();
        $subject = $contact->getMessage();

        $sql = "INSERT INTO contacts (fname, lname, email, subject) VALUES (?, ?, ?, ?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$fname, $lname, $email, $message]);

        echo "<script>alert('Contact information added successfully!')</script>";
    }

    
    
}
?>
