<?php
session_start();
function numroVizitat(){
if (isset( $_SESSION['numro'])){
$_SESSION['numro']++;
}else {
$_SESSION['numro'] = 1;
}
return $_SESSION['numro'];
}
echo 'Ju keni vizituar faqen: '.numroVizitat().' here<br>';
echo 'ID e sesionit eshte: '.session_id()
?>
<!DOCTYPE HTML>



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
    
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
    <section class="main">
        <h1>Mobil <span>Shop</span></h1>
        <p>Best Prices</p>
        <div class="main-class">
            <p class="check">check our store</p>
            <button><a href="store.php">Our Store</a></button>
        </div>
        
    </section>
    <section class="sign">
        <div class="container">
            <h3>Dont have an account

             </h3>
            <button><a href="sign-up.php">Register</a></button>
        </div>
        
       

    </section>
    <section class="Presentation">
        <div class="div-1">
            <h1>Repair</h1>
            <h3>Your Phone</h3>
        </div>
        <div class="div-2">
            <a href="contact.php"> <button> Contact</button></a>

        </div>
    </section>
    <div class="bar">
        <span>
            Ofertat më të mirat
        </span> 
    </div>
    </div>
    <div class="offers">
        <div class="box">
            <div class="first">
               <a href="buy.php">
                <img src="download.webp" alt="">
               </a> 
                <h3>Apple MacBook Air 13.3"</h3>
                <h4>999.0$</h4>

                <button><a href="sign-up.php">Shto në shportë</a></button>
            </div>
            <div class="first">
                <a href="buy2.php">

                <button><a href="buy.php">Shto në shportë</a></button>
            </div>
            <div class="first">
                <a href="#">

                    <img src="iphone.webp" alt="">
                   </a> 
                <h3>Apple iPhone 11, 64GB, Black</h3>
                <h4>549.00 €</h4>
<<<<<<< HEAD
                <button><a href="buy.php">Shto në shportë</a></button>
=======

                <button><a href="sign-up.php">Shto në shportë</a></button>
            </div>
            <div class="first">
                <a href="buy3.php">
                    <img src="hyper.webp" alt="">
                   </a>                 <h3>Kufje HyperX Cloud II, , të kuqe</h3>
                <h4>29.oo$</h4>
                <button><a href="sign-up.php">Shto në shportë</a></button>
            </div>
            <div class="first">
                <a href="buy.php">

                <button><a href="buy2.php">Shto në shportë</a></button>
>>>>>>> dd3a80fc9a767c48cb31c8f42b7bc44642d8375b
            </div>
            <div class="first">
                <a href="#">
                    <img src="hyper.webp" alt="">
                   </a>                 <h3>Kufje HyperX Cloud II, , të kuqe</h3>
                <h4>29.oo$</h4>
                <button><a href="buy.php">Shto në shportë</a></button>
            </div>
            <div class="first">
                <a href="#">

                    <img src="download.webp" alt="">
                   </a> 
                <h3>Apple MacBook Air 13.3"</h3>
                <h4>999.0$</h4>
<<<<<<< HEAD
                <button><a href="buy.php">Shto në shportë</a></button>
=======
                <button><a href="sign-up.php">Shto në shportë</a></button>
>>>>>>> dd3a80fc9a767c48cb31c8f42b7bc44642d8375b
            </div>
            <div class="first">

                <a href="buy2.php">

                <a href="#">

                    <img src="iphone.webp" alt="">
                   </a> 
                <h3>Apple iPhone 12, 64GB, Black</h3>
                <h4>700.0$</h4>
<<<<<<< HEAD
                <button><a href="buy.php">Shto në shportë</a></button>
=======
                <button><a href="sign-up.php">Shto në shportë</a></button>
>>>>>>> dd3a80fc9a767c48cb31c8f42b7bc44642d8375b
            </div>
            <div class="first">

                <a href="buy3.php">

                <a href="#">

                    <img src="hyper.webp" alt="">
                   </a>                  <h3>Kufje HyperX Cloud II, , të kuqe</h3>
                <h4>70.0$</h4>
<<<<<<< HEAD
                <button><a href="buy.php">Shto në shportë</a></button>
=======
                <button><a href="sign-up.php">Shto në shportë</a></button>
>>>>>>> dd3a80fc9a767c48cb31c8f42b7bc44642d8375b
            </div>
            <div class="first">

                <a href="buy2.php">

                <a href="#">

                    <img src="iphone.webp" alt="">
                   </a>                 <h3>Apple iPhone 13, 64GB, red</h3>
                <h4>999.0$</h4>
<<<<<<< HEAD
                <button><a href="buy.php">Shto në shportë</a></button>
=======
                <button><a href="sign-up.php">Shto në shportë</a></button>
>>>>>>> dd3a80fc9a767c48cb31c8f42b7bc44642d8375b
            </div>
            <div class="first">

                <a href="buy.php">

                <a href="#">

                    <img src="download.webp" alt="">
                   </a> 
                <h3>Apple MacBook Air 13.3"</h3>
                <h4>999.0$</h4>
<<<<<<< HEAD
                <button><a href="buy.php">Shto në shportë</a></button>
=======
                <button><a href="sign-up.php">Shto në shportë</a></button>
>>>>>>> dd3a80fc9a767c48cb31c8f42b7bc44642d8375b
            </div>
        </div>
    </div>
           
        </div>
    </div>
    <div class="info">
        <div class="one">
            <div class="first">
                <img src="icon1.png" alt="">
                <h3>Free shipping</h3>
            </div>
            <div class="first">
                <img src="icon2.png" alt="">
                <h3>Fast shipping</h3>
            </div>
        </div>
            <div class="two">
                <div class="first">
                    <img src="icon3.png" alt="">
                    <h3>Delivery to EU countries</h3>
                </div>
                <div class="first">
                    <img src="icon4.png" alt="">
                    <h3>24 months warranty</h3>
                </div></div>

        
    </div>
    <section class="Presentation-2">

        <div class="div-1">

            <h1>Are</h1>
            <h3>You a Gamer</h3>
        </div>
        <div class="div-2">
            <a href="gaming.php"><button>Gaming</button>  </a>

        </div>
        <img src="new.png" alt="">

    </section>
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
                <h2>Pyetje të shpeshta  </h2>
                <a href="">Per – Mobil Shop</a>
                <a href="">Pagesat</a>
                 <a href="">Qeshtjet Teknike</a>
                 <a href="">Transporti</a>

            </div>
            <div class="div">
                <h2>Kontakti               </h2>
                <a href="">Email-contact@mobilshop.com</a>
                <a href="">Tel:+383 045 883 697</a>
                 <a href="">Prishtinë, Kosovë</a>
                 <a href="">.......</a>

            </div>
        </div>
       
</body>
</html>
