<?php
class DatabaseConnection {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "-projekti1mobil";

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
                $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, password) VALUES (:firstname, :lastname, :password)");
                $stmt->bindParam(':firstname', $this->firstname);
                $stmt->bindParam(':lastname', $this->lastname);
                $stmt->bindParam(':password', $this->password); // Note: You should hash the password before storing it in the database for security
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
    $regj->setFirstname($_POST['user']);
    $regj->setLastname($_POST['lname']);
    $regj->setPassword($_POST['psw']);
    $regj->setConfirmpassword($_POST['c_psw']);
    $regj->insertoDhenat();
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="sign-up.css">
</head>
<body>

    <div class="container">
        <form method="POST" onsubmit="return validateForm()">
            <label for="uname"><b>First name</b></label>
            <input type="text" placeholder="Enter First Name" id="uname" name='user' required>
    
            <label for="lname"><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" id="lname" name='lname' required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter password" id="psw" name='psw' required>
            
            <label for="confirmpsw"><b>Confirm password</b></label>
            <input type="password" placeholder="Confirm password" id="confirmpsw" name='c_psw' required>
            
            <button type="submit">Register</button>
            
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            
            <p> Have an account <span><a href="sign-in.php">Sign In</a></span></p>
        </form>
    </div>
    <div class="close">
        <a href="index.php"><img src="close.png" alt=""></a>
    </div>
    <script>
        function validateForm() {
            let fname = document.getElementById('uname').value;
            let lname = document.getElementById('lname').value;
            let password = document.getElementById('psw').value;
            let confirmPassword = document.getElementById('confirmpsw').value;

            let nameRegex = /^[A-Z][a-z]*$/;
            if (!nameRegex.test(fname)) {
                alert('First name should start with a capital letter.');
                return false;
            }
            
            if (!nameRegex.test(lname)) {
                alert('Last name should start with a capital letter.');
                return false;
            }

            if (password !== confirmPassword) {
                alert('Password and Confirm Password should match.');
                return false;
            }

            if (fname === "" || lname === "" || password === "" || confirmPassword === "") {
                alert('Complete all fields.');
                return false;
            }

            alert('You are registered!');
            return true;
        }
    </script>
</body>
    </html>

