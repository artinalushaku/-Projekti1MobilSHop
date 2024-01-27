<?php
class DatabaseConnection {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "mobilshop";
    private $conn;

    public function __construct() {
        $this->startConnection();
    }

    private function startConnection() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password,$this->conn);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if (!$this->conn) {
                echo "Connection failed ";
                return null;
            } else {
                echo "Connection successful!";
            }
        } catch (PDOException $e) {
            echo "Connection failed " . $e->getMessage();
            return null;
        }
    }

    public function getDb() {
        return $this->conn;
    }
}
?>
