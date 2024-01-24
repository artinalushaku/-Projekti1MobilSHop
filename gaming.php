<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="gaming.css">
    
    
</head>

<body>
    <div class="bar">
        <h1>Mbani lidhjen. Përjetojeni inovacionin. Zgjidhni Mobil Shop.
        </h1>
    </div>
    <header>
        <div class="container">
            <div class="logo">
               <a href="index.html
               "><img src="logo2.png" alt=""></a> 
            </div>
            <div class="logo-2">
                <a href="nav.html">
                    <img src="bars.png" alt="">
                </a>
            </div>
            <nav>
            
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="store.html">Store</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="aboutUs.html">About Us</a></li>
                    <li><a href="gaming.html">Gaming</a></li>
    
    
                </ul>
                
               </nav>
               <div class="sign-in">
                <a href=""><img src="icons8-add-to-shopping-basket-96.png" alt=""></a>
                <a href="sign-in.html"><button>Sign In</button></a>
                
            </div>
        </div>
        
           
       
    </header>

    <div class="gaming">
        <h3>GAMING</h3>
        <h1>TIME</h1>
    </div>
    <div class="build">
        <div class="first">
            <h1> Gaming Phones</h1>
            <p>


                Performancë e jashtëzakonshme: Telefona lojërash janë pajisur me procesorë dhe karta grafike të fuqishme, duke siguruar lojëra pa rrëmujë dhe tërheqëse. <br>

                Ekran me shkallë rifreskimi të lartë: Shijoni pamje ultra-e përsosur me ekranë me shkallë rifreskimi të lartë, ideale për lojëra me ritëm të shpejtë. <br>
                
                Bateri me jetëgjatë: Telefona lojërash vijnë me jetëgjatë të zgjatur baterie për të mbështetur seancat e gjata lojërash. <br>
                
                Teknologji avancuar të ftohjes: Mbani kryqzimin e ftohtë me sisteme të avancuara të ftohjes që parandalojnë ngrohjen e tepërt. <br>
                
                Veçori specifike për lojëra: Mënyra e dedikuar për lojëra, kontrollat e personalizuara dhe rregullimi i ndjesive të feedback-ut për një përvojë lojrash të optimizuar.</p>
        </div>
        <div class="second">
            <img src="middle-removebg-preview.png" alt="">
        </div>
    </div>
    <div class="product">
        <div class="first">
            <h1> Pajisjet dhe aksesorët e lojërave!</h1>
            <p>


                Pajisjet dhe aksesorët e lojërave: Ofroni një gamë të gjerë pajisjesh lojrash, të tilla si tastierë lojrash, minj,
                kontrollorët, kufjet dhe karriget e lojërave. Këto janë aksesorë thelbësorë për lojtarët që kërkojnë të përmirësohen
                përvojën e tyre të lojë <br>

                Konzolat e lojërave: Përfshini konzolat e njohura të lojërave si PlayStation, Xbox, Nintendo Switch dhe të tjerë.
                Ju gjithashtu mund të ofroni paketa konzolash me lojëra dhe aksesorë.</p>
        </div>
        <div id="second">
            <header>
            <h2>Slide Show: shfaqja e imazheve </h2>
            <img name="mySlide" id="slideshow" />
            </header>
            <button onclick="ndrroImg()">Next</button>
            </div>
            
    </div>
    <script>
        var i = 0;
        var imgArray = [
        "png.png",
        "setup.png",
        "mouse.png"
        
        ];
        function ndrroImg() {
        document.getElementById('slideshow').src = imgArray[i];
        if (i < imgArray.length - 1) {
        i++;
        } else {
        i = 0;
        }
        //setTimeout("ndrroImg()", 2600)
        }
        document.body.addEventListener('load', ndrroImg());
        </script>
        
    



    
    <section class="sign">
        <div class="container">
            <h3>Explore our amazing collection of products.

             </h3>
            <button><a href="store.html">store</a></button>
        </div>
        
       

    </section>
    <section class="footer">
        <div class="logo">
            <a href="index.html">
                <img src="logo2.png" alt="">
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
                <a href="help.html">Per – Mobil Shop</a>
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

