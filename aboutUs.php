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
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="aboutUs.css">
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

                    <li><a href="store.php">Store</a><php>

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
    <div class="text">
        <h2>Rreth Nesh: Mobil Shop</h2>
        <p>Mirësevini në Mobil Shop, destinacioni juaj i fundit për të gjitha nevojat tuaja të telefonisë mobile dhe
            teknologjisë! Me një pasion për teknologjinë e avancuar dhe një përkushtim për shërbim të jashtëzakonshëm
            ndaj klientëve, kemi qenë me krenari në shërbim të klientëve tanë të çmuar që nga [2023].</p>


    </div>
    <div class="text">
        <h2>Vizioni Ynë</h2>Ne kemi kënaqësinë të ofrojmë vetëm produkte me cilësi të lartë nga prodhues të besuar dhe
        distribuidorë të autorizuar. Kur bleni në Mobil Shop, mund të jeni të sigurt se çdo produkt është origjinal dhe
        ka garancinë e prodhuesit origjinal. Ne besojmë në ofrimin e produkteve që përmbushin standardet më të larta të
        cilësisë.
        <p>Në Mobil Shop, vizioni ynë është të jemi dyqani i parë i telefonisë mobile për të gjithë ata që kërkojnë
            aparate të fundit, smartphone dhe aksesore. Synojmë të krijojmë një përvojë blerjeje të pa ndërprerë, të
            këndshme dhe që ju lë të kënaqeni me blerjen tuaj.</p>
    </div>
    <div class="text">
        <h2>Cilësia dhe Autenticiteti</h2>
        <p>Ne kemi kënaqësinë të ofrojmë vetëm produkte me cilësi të lartë nga prodhues të besuar dhe distribuidorë të
            autorizuar. Kur bleni në Mobil Shop, mund të jeni të sigurt se çdo produkt është origjinal dhe ka garancinë
            e prodhuesit origjinal. Ne besojmë në ofrimin e produkteve që përmbushin standardet më të larta të cilësisë.
        </p>
    </div>
    <div class="text">
        <h2>Këshillim i Ekspertëve dhe Shërbimi i Personalizuar</h2>
        <p>Ekipi ynë i ekspertëve të ditur është këtu për t'ju udhëzuar në çdo hap të rrugës. Pavarësisht nëse keni
            nevojë për ndihmë për të zgjedhur smartphonen perfekte, gjetjen e aksesoreve të duhura ose zgjidhjen e
            problemeve, ne angazhohemi të ofrojmë këshilla dhe mbështetje personalizuar për t'ju siguruar që të bëni
            zgjedhjet më të mira.</p>
    </div>
    <div class="text">
        <h2>Blerje të Sigurta dhe të Rehatshme</h2>
        <p>Siguria dhe rehatia juaj janë thelbësore për ne. Dyqani ynë online është i lehtë për tu përdorur dhe
            ofron një mjedis blerjeje të sigurtë, të mbrojtur nga masa të avancuara të sigurisë. Përveç kësaj,
            ofrojmë shumë opsione pagese për t'ju bërë procesin e blerjes të shpejtë dhe pa vështirësi.</p>
    </div>
    <div class="text">
        <h2>Transporti i Shpejtë dhe i Besueshëm</h2>
        <p>Pas blerjes, e dimë që nuk mund të prisni për t'u marrë me pajisjen tuaj të re. Partnerët tanë të
            transportit punojnë me përkushtim për të siguruar një trajtim të shpejtë të porosisë dhe dorëzimin
            në kohë, që ju të filloni të kënaqeni me blerjen tuaj sa më shpejt.</p>
    </div>
    <div class="text">
        <h2>Kujdesi ndaj Klientëve dhe Mbështetja pas Shitjes</h2>
        <p>Marrëdhënia jonë me ju zgjat përtej blerjes. Ekipi ynë i përkushtuar i kujdesit ndaj klientëve është
            gjithmonë i gatshëm për të përgjigjur pyetjeve ose shqetësimeve tuaja. Ne besojmë në ndërtimin e
            marrëdhënieve të qëndrueshme me klientët tanë, dhe mbështetja jonë të besueshme pas shitjes siguron
            kënaqësinë tuaj edhe pas blerjes së produkteve..</p>
    </div>
    <div class="text">
        <h2>Përfaqësimi i Komunitetit</h2>
        <p>Në Mobil Shop, kuptojmë rëndësinë e dhënies së diçkaje mbrapa komunitetit. Marrim pjesë aktivisht në
            iniciativa sociale dhe të bamirësisë, duke synuar të krijojmë një ndikim pozitiv në shoqëri dhe të
            kontribuojmë në shkaqe që na interesojnë thellësisht.</p>
        <p>Faleminderit që zgjodhët Mobil Shop si destinacionin tuaj të preferuar për të gjitha nevojat tuaja të
            telefonisë mobile dhe teknologjisë. Jemi të emocionuar që të jemi pjesë e udhëtimit tuaj teknologjik dhe
            presim me kënaqësi t'ju shërbejmë me produkte dhe shërbime të shkëlqyera.</p>
    </div>
  <h4>Mbani lidhjen. Përjetojeni inovacionin. Zgjidhni Mobil Shop.</h4>
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