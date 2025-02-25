
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">

    
</head>

<body>
    <div class="bar">
        <h1>Mbani lidhjen. Përjetojeni inovacionin. Zgjidhni Mobil Shop.
        </h1>
    </div>
    <header>
        <div class="container">
            <div class="logo">
               <a href="index.php
               "><img src="logo.png" alt=""></a> 
            </div>
            <div class="logo-2">
                <a href="nav.php">
                    <img src="bars.png" alt="">
                </a>
            </div>
            <nav>
            
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="store.php">Store</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="aboutUs.php">About Us</a></li>
                    <li><a href="gaming.php">Gaming</a></li>
    
    
                </ul>
                
               </nav>
               <div class="sign-in">
                <a href=""><img src="icons8-add-to-shopping-basket-96.png" alt=""></a>
                <a href="sign-in.php"><button>Sign In</button></a>
                
            </div>
        </div>
        
           
       
    </header>

    <div class="contact">
        <h1>Contact</h1>
        <div class="con">
            <div class="con-info">
                <h3>GENERAL INFORMATION:</h3>
                <p>Prishtina<br>
                    65433561<br>
                    Kosovo</p>
            </div>
            <div class="con-info">
                <h3>CUSTOMER SUPPORT:</h3>
                <p>Email: info.mobilshop@gmail.com<br>
                    Phone: 65933561</p>
                <div class="col">
                    <h4>Monday through Friday</h4>
                    <p>08:30 AM to 02:30 PM</p>
                </div>
            </div>
            <div class="con-info">
                <h3>PRODUCT RETURNS:</h3>
                <p>Please contact our customer service for the correct postal address for product returns and post-purchase services.</p>
                <p>Email: warranty@mobileshop.com</p>
            </div>
        </div> 
    </div>
    
    
    
    

    <div class="last">
    
            
          
<div class="container">
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" onsubmit="return validateForm();">
   
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Enter First Name" >

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Enter Last Name" >

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Enter Email" >
</div>
<div class="container-1">
    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Write your message..." style="height:200px" ></textarea>
    <input type="submit" name="contactbtn" value="Submit">
    <?php
include_once('DatabaseConnection.php');


$db = new DatabaseConnection();

if (isset($_POST['contactbtn'])) {
    
    $db->setFname($_POST['fname']);
    $db->setLname($_POST['lname']);
    $db->setEmail($_POST['email']);
    $db->setSubject($_POST['subject']);

    $db->startConnection();

    $db->insertoDhenat();
}
?>
</div>
</form>
</div>

    <section class="footer">
        <hr>
        <div class="logo">
            <a href="index.php">
                <img src="logo.png" alt="">
            </a>
        </div>
        <div class="navBar">
            <div class="div">
                <h3>Rri i lidhur me Mobil Shop</h3>
                <div class="icons">
                    <img src="icons8-facebook-30.png" alt="">
                    <img src="icons8-instagram-30.png" alt="">
                    <img src="icons8-twitter-30.png" alt="">
                 </div>
                 <h2>Mundësuar nga Mobil Shop, Inc.</h2>
                 <h5>Të gjitha të drejtat e rezervuara</h5>
                 <a href="">Kushtet e përdorimit – Mobil Shop</a>
                 <a href="">Politika e Privatësisë</a>
    
            </div>
            <div class="div">
                <h2>Llogaria</h2>
                <a href="">Shporta ime</a>
                <a href="">Porosite</a>
                 <a href="">Lista e deshirave</a>
                 <a href="">Llogaria ime</a>
    
            </div>
            <div class="div">
                <h2>Pyetje të shpeshta </h2>
                <a href="">Per – Mobil Shop</a>
                <a href="">Pagesat</a>
                 <a href="">Qeshtjet Teknike</a>
                 <a href="">Transporti</a>
    
            </div>
            <div class="div">
                <h2>Kontakti               </h2>
                <a href="">Email-contact@mobilshop.com</a>
                <a href="">Tel:+383 045 883 702</a>
                 <a href="">Prishtinë, Kosovë</a>
                 <a href="">.......</a>
    
            </div>
        </div>
       </section>
    
       <script>
        function validateForm() {         
            let fname = document.getElementById('fname').value;
            let lname = document.getElementById('lname').value;
            let email = document.getElementById('email').value;
            let subject = document.getElementById('subject').value;

            let fnameRegex = /^[A-Z]/;                                                                                                                       
            if (!fnameRegex.test(fname)) {
                alert('Please enter a valid name.');
                return false;
            }

            let lnameRegex =/^[A-Z]/;                                                                 
            if (!lnameRegex.test(lname)) {
                alert('Please enter a valid last name.');
                return false;
            }
           

            let emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email.');
                return false;
            } 
     
            let subjectRegex = /^(?!0$).+/;                                                       
            if(!subjectRegex.test(subject)){
                alert('Please write a message');
                return false; 

            }
           
            alert('The message is sent!');
            return true;

        }



        

    </script>
    


</body>

    </html>

    <?php
session_start();

if (isset($_POST['contactbtn'])) {
    if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email'])) {
        echo '<script>alert("Please fill the required fields!");</script>';
    } else {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];

        
        $userFound = false;

        foreach ($users as $contacts) {
            if ($user['fname'] == $fname && $user['lname'] == $lname && $user['email'] == $email) {
                $userFound = true;

                $_SESSION['fname'] = $fname;
                $_SESSION['lname'] = $lname;
                $_SESSION['email'] = $email;
                $_SESSION['role'] = $user['role'];
                $_SESSION['loginTime'] = date("H:i:s");
                header("location:index.php");
                exit();
            }
        }

        if (!$userFound) {
            echo "Incorrect Name or Last Name or Email";
        }
    }
}
?>