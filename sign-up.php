<?php
include_once 'DatabaseConnection2.php'
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
            
            <button type="submit" name="save">Register</button>
            
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

            let nameRegex =/^[A-Z]/;
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
