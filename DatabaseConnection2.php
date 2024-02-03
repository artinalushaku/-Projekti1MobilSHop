<?php
class DatabaseConnection {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "projektimobilshop";

    public function startConnection() {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed " . $e->getMessage();
            return null;
        }
    }
}

class Studenti {
    private $firstname;
    private $lastname;
    private $password;
    private $confirm_password;

    public function __construct() {
        // $this->firstname = $firstname;
        // $this->lastname = $lastname;
        // $this->password = $password;
        // $this->confirm_password = $confirm_password;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setConfirmpassword($confirm_password) {
        $this->confirm_password = $confirm_password;
    }

    public function insertoDhenat() {
        $dbConnection = new DatabaseConnection();
        $conn = $dbConnection->startConnection();
    
        if ($conn) {
            try {
                $stmt = $conn->prepare("INSERT INTO users (id, firstname, lastname, password, confirm_password, role) VALUES (:id, :firstname, :lastname, :password, :confirm_password, :role)");
    
                $stmt->bindParam(':id', $this->id);
                $stmt->bindParam(':firstname', $this->firstname);
                $stmt->bindParam(':lastname', $this->lastname);
                $stmt->bindParam(':password', $this->password);
                $stmt->bindParam(':confirm_password', $this->confirm_password);
                $stmt->bindParam(':role', $this->role);
    
                $stmt->execute();
                echo "New record created successfully";
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            echo "Database connection failed.";
        }
    }
    
}

if (isset($_POST['save'])) {
    $regj = new Studenti();
    // $firstname=$regj->setFirstname($_POST['user']);
   $regj->setFirstname($_POST['user']);
//    $lasstname=$regj->setLastname($_POST['lname']);
    $regj->setLastname($_POST['lname']);
    // $password=$regj->setPassword($_POST['psw']);
    $regj->setPassword($_POST['psw']);
    // $confirm_password=$regj->setConfirmpassword($_POST['c_psw']);
    $regj->setConfirmpassword($_POST['c_psw']);
    $regj->insertoDhenat();

// echo "clicked";
}
?>