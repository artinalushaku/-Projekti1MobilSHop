<?php 
include_once 'DatabaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertProdukti($produkti){

        $conn = $this->connection;

        $id = $produkti->getId();
        $name = $produkti->getName();
        $price = $produkti->getPrice();
        $image = $produkti->getImage();

        $sql = "INSERT INTO produkti (id,name,price,image) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$price,$image]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function getAllProducts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM produkti";

        $statement = $conn->query($sql);
        $products = $statement->fetchAll();

        return $products;
    }

    function getProductById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM produkti WHERE id='$id'";

        $statement = $conn->query($sql);
        $produkti = $statement->fetch();

        return $produkti;
    }

    function updateProdukti($id,$name,$price,$image){
         $conn = $this->connection;

         $sql = "UPDATE produkti SET name=?, price=?, image=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$name,$price,$image,$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteProdukti($id){
        $conn = $this->connection;

        $sql = "DELETE FROM produkti WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}