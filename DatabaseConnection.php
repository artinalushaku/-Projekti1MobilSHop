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
    function getConnection() {
        return $this->conn;
    }
   
    
     
        private $fname;
        private $lname;
        private $email;
        private $subject;
    
       
    
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
            $sql = "INSERT INTO contacts (fname, lname, email, subject) VALUES (?, ?, ?, ?)";
            $stm = $this->conn->prepare($sql);
            $stm->execute([$this->fname, $this->lname, $this->email, $this->subject]);
    
            echo "<script>
                alert('The message is sent!');
                document.location='index.php';
            </script>";
        }
    
        public function getContactFormSubmissions() {
            $sql = "SELECT * FROM contacts";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
    

}

$db = new DatabaseConnection();
$db->startConnection(); 



    




?>
