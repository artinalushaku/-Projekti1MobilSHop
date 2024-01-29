<?php
class DatabaseConnection {
    
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "mobilshop";
    private $conn;  // Store the connection object as an instance variable

    function startConnection() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if (!$this->conn) {
                echo "Connection failed "; 
                return null;
            } else {
                echo "";
            }
             
        } catch (PDOException $e) {
            echo "Connection failed " . $e->getMessage();
            return null;
        }
    }

    function getDb() {
        return $this->conn;
    }
}

$db = new DatabaseConnection();
$db->startConnection();
?>
