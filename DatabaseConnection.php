<?php
class DatabaseConnection{
   
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "mobilshop";

function startConnection(){
    try{
        $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(!$conn){
            echo "Connection failed "; 
            return null;
        }else{
           echo "Connection successful!";
        }
        
    }catch(PDOException $e){
        echo "Connection failed ". $e->getMessage();
        return null;
    }
}
}
$db=new DatabaseConnection();
$db->startConnection();


function addToCart($id, $name, $price, $image) {
    global $conn;

    $sql = "INSERT INTO cart ($id, $name, $price, $image) VALUES ('','','','')";
    $result = $conn->query($sql);

    if ($result) {
        echo "Product added to the cart successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price']; 
    $image = $_POST['image']; 
    $id = $_POST['id']; 
    addToCart($name, $price, $image, $id);
}
?>
?>
