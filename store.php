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
echo '<div style="font-family: Arial, sans-serif; position: fixed; top: 10px; left: 10px; padding: 10px; background-color: #f2f2f2; border: 1px solid #ddd; border-radius: 5px; font-size: 12px; color: #333;">';
echo 'Ju keni vizituar faqen: <strong>' . numroVizitat() . '</strong> here<br>';
echo 'ID e sesionit eshte: <strong>' . session_id() . '</strong>';
echo '</div>';

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="store.css">

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
   
        
    <div class="search">
        <div class="container">
         
                <input type="text" placeholder="Search" name="Search" required>
                <label for="cars" id="categories">Kategoritë</label>
          <select id="cars" name="kategorite">
            <option value="volvo">telefona</option>
            <option value="saab">pjese</option>
            <option value="fiat">kompjutera</option>
            <option value="audi">te tjera</option>
          </select>
         
        </div>
       
    </div>
    <div class="offers" id="off">
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
                        <img src="iphone.webp" alt="">
                       </a> 
                    <h3>Apple iPhone 11, 64GB, Black</h3>
                    <h4>549.00 €</h4>
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
                        <img src="download.webp" alt="">
                       </a> 
                    <h3>Apple MacBook Air 13.3"</h3>
                    <h4>999.0$</h4>
                    <button><a href="sign-up.php">Shto në shportë</a></button>
                </div>
                <div class="first">
                    <a href="buy2.php">
                        <img src="iphone.webp" alt="">
                       </a> 
                    <h3>Apple iPhone 12, 64GB, Black</h3>
                    <h4>700.0$</h4>
                    <button><a href="sign-up.php">Shto në shportë</a></button>
                </div>
                <div class="first">
                    <a href="buy2.php">
                        <img src="iphone.webp" alt="">
                       </a>                 <h3>Apple iPhone 13, 64GB, red</h3>
                    <h4>999.0$</h4>
                    <button><a href="sign-up.php">Shto në shportë</a></button>
                </div>
                <div class="first">
                    <a href="buy.php">
                        <img src="download.webp" alt="">
                       </a> 
                    <h3>Apple MacBook Air 13.3"</h3>
                    <h4>999.0$</h4>
                    <button><a href="sign-up.php">Shto në shportë</a></button>
                </div>
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
                            <img src="iphone.webp" alt="">
                           </a> 
                        <h3>Apple iPhone 11, 64GB, Black</h3>
                        <h4>549.00 €</h4>
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
                            <img src="download.webp" alt="">
                           </a> 
                        <h3>Apple MacBook Air 13.3"</h3>
                        <h4>999.0$</h4>
                        <button><a href="sign-up.php">Shto në shportë</a></button>
                    </div>
                    <div class="first">
                        <a href="buy2.php">
                            <img src="iphone.webp" alt="">
                           </a> 
                        <h3>Apple iPhone 12, 64GB, Black</h3>
                        <h4>700.0$</h4>
                        <button><a href="sign-up.php">Shto në shportë</a></button>
                    </div>
                    <div class="first">
                        <a href="buy3.php">
                            <img src="hyper.webp" alt="">
                           </a>                  <h3>Kufje HyperX Cloud II, , të kuqe</h3>
                        <h4>70.0$</h4>
                        <button><a href="sign-up.php">Shto në shportë</a></button>
                    </div>
                    <div class="first">
                        <a href="buy2.php">
                            <img src="iphone.webp" alt="">
                           </a>                 <h3>Apple iPhone 13, 64GB, red</h3>
                        <h4>999.0$</h4>
                        <button><a href="sign-up.php">Shto në shportë</a></button>
                    </div>
                    <div class="first">
                        <a href="buy.php">
                            <img src="download.webp" alt="">
                           </a> 
                        <h3>Apple MacBook Air 13.3"</h3>
                        <h4>999.0$</h4>
                        <button><a href="sign-up.php">Shto në shportë</a></button>
            </div>
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
                        <img src="iphone.webp" alt="">
                       </a> 
                    <h3>Apple iPhone 11, 64GB, Black</h3>
                    <h4>549.00 €</h4>
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
                        <img src="download.webp" alt="">
                       </a> 
                    <h3>Apple MacBook Air 13.3"</h3>
                    <h4>999.0$</h4>
                    <button><a href="sign-up.php">Shto në shportë</a></button>
                </div>
                <div class="first">
                    <a href="buy2.php">
                        <img src="iphone.webp" alt="">
                       </a> 
                    <h3>Apple iPhone 12, 64GB, Black</h3>
                    <h4>700.0$</h4>
                    <button><a href="sign-up.php">Shto në shportë</a></button>
                </div>
                <div class="first">
                    <a href="buy3.php">
                        <img src="hyper.webp" alt="">
                       </a>                  <h3>Kufje HyperX Cloud II, , të kuqe</h3>
                    <h4>70.0$</h4>
                    <button><a href="sign-up.php">Shto në shportë</a></button>
                </div>
                <div class="first">
                    <a href="buy2.php">
                        <img src="iphone.webp" alt="">
                       </a>                 <h3>Apple iPhone 13, 64GB, red</h3>
                    <h4>999.0$</h4>
                    <button><a href="sign-up.php">Shto në shportë</a></button>
                </div>
                <div class="first">
                    <a href="buy.php">
                        <img src="download.webp" alt="">
                       </a> 
                    <h3>Apple MacBook Air 13.3"</h3>
                    <h4>999.0$</h4>
                    <button><a href="sign-up.php">Shto në shportë</a></button></div>
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
                                <img src="iphone.webp" alt="">
                               </a> 
                            <h3>Apple iPhone 11, 64GB, Black</h3>
                            <h4>549.00 €</h4>
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
                                <img src="download.webp" alt="">
                               </a> 
                            <h3>Apple MacBook Air 13.3"</h3>
                            <h4>999.0$</h4>
                            <button><a href="sign-up.php">Shto në shportë</a></button>
                        </div>
                        <div class="first">
                            <a href="buy2.php">
                                <img src="iphone.webp" alt="">
                               </a> 
                            <h3>Apple iPhone 12, 64GB, Black</h3>
                            <h4>700.0$</h4>
                            <button><a href="sign-up.php">Shto në shportë</a></button>
                        </div>
                        <div class="first">
                            <a href="buy3.php">
                                <img src="hyper.webp" alt="">
                               </a>                  <h3>Kufje HyperX Cloud II, , të kuqe</h3>
                            <h4>70.0$</h4>
                            <button><a href="sign-up.php">Shto në shportë</a></button>
                        </div>
                        <div class="first">
                            <a href="buy2.php">
                                <img src="iphone.webp" alt="">
                               </a>                 <h3>Apple iPhone 13, 64GB, red</h3>
                            <h4>999.0$</h4>
                            <button><a href="sign-up.php">Shto në shportë</a></button>
                        </div>
                        <div class="first">
                            <a href="buy.php">
                                <img src="download.webp" alt="">
                               </a> 
                            <h3>Apple MacBook Air 13.3"</h3>
                            <h4>999.0$</h4>
                            <button><a href="sign-up.php">Shto në shportë</a></button></div>
        </div>
            </div>
                </div>
            </div>
        </div>
        </div>
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