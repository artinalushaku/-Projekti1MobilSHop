<?php

class DatabaseConnection {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "mobilshop";
    private $conn;

    function __construct() {
        
    }

    public function startConnection() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


    public function getConnection() {
        if ($this->conn === null) {
         
            $this->startConnection();
        }

        return $this->conn;
    }

    public function setFname($fname) {
        $this->fname = $fname;
    }

    public function setLname($lname) {
        $this->lname = $lname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function insertoDhenat() {
        if ($this->conn === null) {
       
            $this->startConnection();
        }

        $sql = "INSERT INTO contacts (fname, lname, email, subject) VALUES (?, ?, ?, ?)";
        $stm = $this->conn->prepare($sql);
        $stm->execute([$this->fname, $this->lname, $this->email, $this->subject]);

        echo "<script>
            alert('The message is sent!');
            document.location='index.php';
        </script>";
    }
}