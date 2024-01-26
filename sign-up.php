<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

class DatabaseConnection{
    private $server = "localhost";
    private $firstname = "root"; 
    private $lastname = "root";
    private $password = "";
    private $confirm_password = "";
    private $database = "-projekti1MobilShop";

    function startConnection(){
        try{
            $conn = new PDO("mysql:host=$this->server;dbname=$this->database",$this->firstname,$this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            echo "Database Connection Failed: " . $e->getMessage();
            return null;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="sign-up.css">
</head>
<body>
    <div class="container">
        <form onsubmit="return validateForm()" action="connect.php" method="post">
            <label for="uname"><b>First name</b></label>
            <input type="text" placeholder="Enter First Name" id="uname" required name="firstname">
    
            <label for="lname"><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" id="lname" required name="lastname">

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter password" id="psw" required name="password">
            
            <label for="confirmpsw"><b>Confirm password</b></label>
            <input type="password" placeholder="Confirm password" id="confirmpsw" required name="confirm_password">
            
            <button type="submit">Register</button>
            
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            
            <p> Have an account <span><a href="sign-in.html">Sign In</a></span></p>
        </form>
    </div>
    <div class="close">
        <a href="index.html"><img src="close.png" alt=""></a>
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

