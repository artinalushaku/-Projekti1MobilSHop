
<?php
require_once 'DatabaseConnection.php';
$database = new DatabaseConnection();
$conn = $database->getDb();

$sql = "SELECT * FROM produktet";
$all_produktet = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="buy.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
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
                <a href="#">
                    <img src="bars.png" alt="">
                </a>
            </div>
            <nav>
            
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="store.php">Store</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="gaming.php">Gaming</a></li>
    
    
                </ul>
                
               </nav>
               <div class="sign-in">
                <a href=""><img src="icons8-add-to-shopping-basket-96.png" alt=""></a>
                <a href="sign-in.php"><button>Sign In</button></a>
                
            </div>
        </div>
        
           
       
    </header>
    <?php
while ($row = $all_produktet->fetch(PDO::FETCH_ASSOC)) {
    // Your code to process each row



    
    
    
    ?>
    <section class="buys">
        <div class="one">
            <img src="<?php echo $row["produktet_image"];?>" alt="">
        </div>
        <div class="second">
            <p class="name"><?php echo $row["name"];?></p>
            <p class="price"><?php echo $row["price"];?></p>
           <p class="discount"><b><del><?php echo $row["discount"];?></del></b></p>
            <div class="btn">
                <button><a href="">Bleje Tani</a></button>
                <button class="btn-s"><a href="">Shporta</a></button>
            </div>
        </div>
    </section>
    <?php
    }
    
    ?>

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
                <h2>Pyetje të shpeshta                </h2>
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
</body>

</html>







