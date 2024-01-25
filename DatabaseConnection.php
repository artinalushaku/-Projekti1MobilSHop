<?php
class DatabaseConnection{
    //keto te dhena i merrni ne baze te databazes suaj
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
?>
