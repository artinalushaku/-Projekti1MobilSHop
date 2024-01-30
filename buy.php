
<?php
require_once 'DatabaseConnection.php';
$database = new DatabaseConnection();
$database->startConnection();  
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
    <link rel="stylesheet" href="">
    <style>
        body {
    font-family: 'Poppins', sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.bar {
    background-color: black;
    color: #fff;
    text-align: center;
    padding-top: 20px;
    padding-bottom: 20px;
    font-size: 20px;
}

header {
    position: sticky;
    top: 0;
    width: 100%;
    background-color: #fff;
    z-index: 1;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
}

header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
}

header ul {
    display: flex;
}

header ul li {
    margin-right: 20px;
    list-style-type: none;
    font-size: 16px;
}

header ul li:hover {
    border-bottom: 3px solid rgb(255, 181, 44);
}

header ul li a {
    text-decoration: none;
    color: black;
}

header ul li:last-child {
    margin-right: 0;
}

header ul li:first-child {
    margin-left: 20px;
}

.sign-in img {
    width: 30px;
    align-items: center;
}

.sign-in {
    display: flex;
    align-items: center;
    max-width: 100%;
}

.sign-in button {
    margin-right: 10px;
    margin-bottom: 5px;
    background-color: rgb(255, 181, 44);
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.buys {
    padding-top: 20px;
    display: flex;
    flex-basis: 45%;
    align-items: center;
    justify-content: center;
    background-color: white;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.buys img {
    width: 100%;
    max-width: 300px;
    height: auto;
    border-radius: 5px;
}

.second .btn {
    display: flex;
    gap: 10px;
}

.second {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.btn-s {
    background-color: #f7f7f7;
    border: 1px solid #ddd;
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    text-decoration: none;
    color: black;
}

.footer {
    display: flex;
    flex-direction: column;
    color: black;
    margin-top: 5%;
    padding: 20px;
    background-color: #f1f1f1;
}

.footer .navBar {
    display: flex;
    flex-direction: row;
    flex-basis: 30%;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer .navBar div {
    flex-direction: column;
    margin-bottom: 20px;
}

.footer .navBar div .icons {
    flex-direction: row;
    row-gap: 20px;
}

.footer .logo img {
    width: 150px;
}

.footer h2,
.footer h3,
.footer h5 {
    margin-bottom: 10px;
}

.footer a {
    margin-bottom: 10px;
    display: block;
    text-decoration: none;
    color: rgb(94, 93, 93);
}

.footer a:hover {
    text-decoration: underline solid rgb(94, 93, 93);
}

.cartTab {
   
    position: fixed;
    top: 0;
    right: 0;
    bottom:0;
    display:grid;
    inset: 0 0 0 auto;
    grid-template-rows: 70px 1fr 70px;

    padding: 10px;
    background-color: #f1f1f1;
    border: 1px solid #ddd;
    z-index: 2;
    border-radius: 5px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.cartTab h1 {
    margin-bottom: 10px;
    font-size: 18px;
}

.cartTab .ListCart {
    /* Add styles for the list */
}

.cartTab .btn button {
    background-color: rgb(255, 181, 44);
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.cartTab .btn .close {
    background-color: #ddd;
    color: black;
    margin-right: 10px;
}

.cartTab .btn button:hover,
.cartTab .btn .close:hover {
    background-color: rgb(255, 161, 0);

}
.cartTab .listCart .item img{
    width: 100%
}
.cartTab .listCart .item{
    display: grid;
    grid-template-columns: 70px 150px 50px 1fr;
    gap: 10px;
    text-align: center;
    align-items:center;

}
.listCart .quantity span {
    display: inline-block;
    width: 25px;
    height: 25px;
    background-color:#white;
    color:#555;
    border-radius: 50%;
    cursor:pointer;
}
.listCart .quantity span:nth-child(2){
    

}
.listCart .item:nth-child(even){
    background:;
}
    </style>

   
</head>


<body>
    <div class="bar">
        <h1>Mbani lidhjen. Përjetojeni inovacionin. Zgjidhni Mobil Shop.
        </h1>
    </div>
    <header>
   
        <div class="container">
       
        </div>
        
    </div>
           
            <nav>
            
               
               </nav>
               <div class="sign-in">
                <a href=""><img src="icons8-add-to-shopping-basket-96.png" alt=""></a>
                <a href="sign-in.php"><button>Sign In</button></a>
                
            </div>
        </div>
        
           
       
    </header>
    <?php
include_once("DatabaseConnection.php");

// Retrieve the connection object
$conn = $db->getDb();

if (!$conn) {
    die("Connection failed");
}

while ($row = $all_produktet->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <section class="buys">
        <div class="one">
            <img src="<?php echo $row["produktet_image"];?>" alt="">
        </div>
        <div class="second">
            <p class="name"><?php echo $row["name"];?></p>
            <p class="price"><?php echo $row["price"];?></p>
            <p class="discount"><b><del><?php echo $row["discount"];?></del></b></p>

            <!-- Form for each product -->
            <form method="post" action="process_order.php">
                
                <!-- Hidden input fields to carry product-specific data -->
                <input type="hidden" name="produktet_id" value="<?php echo $row["produktet_id"];?>">
                <input type="hidden" name="name" value="<?php echo $row["name"];?>">
                <input type="hidden" name="price" value="<?php echo $row["price"];?>">
                <input type="hidden" name="discount" value="<?php echo $row["discount"];?>">
                <input type="hidden" name="produktet_image" value="<?php echo $row["produktet_image"];?>">
                
                <!-- Order now button for each product -->
                <input type="submit" name="btn" value="Order now">
            </form>
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







