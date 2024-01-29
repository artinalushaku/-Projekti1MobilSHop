<?php
include("DatabaseConnection.php");

// Retrieve the connection object
$conn = $db->getConnection();

// Check if the connection is successful
if (!$conn) {
    die("Connection failed");
}

class UserRepository {
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection();
        $this->connection = $conn->startConnection();
    }

    function insertBleje($bleje){
        $conn = $this->connection;
    
        $id = $bleje->getId();
        $name = $bleje->getName();
        $discount = $bleje->getDiscount();
        $price = $bleje->getPrice();
        $image = $bleje->getImage();
    
        $sql = "INSERT INTO bleje (id, name, price, discount, image) VALUES (?, ?, ?, ?, ?)";
    
        try {
            $statement = $conn->prepare($sql);
    
            if ($statement->execute([$id, $name, $price, $discount, $image])) {
                return 'User has been inserted successfully!';
            } else {
                return 'Error: Unable to insert user.';
            }
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    function getAllProducts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM bleje";

        $statement = $conn->query($sql);
        $bleje = $statement->fetchAll();

        return $bleje;
    }

    function getProductById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM bleje WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);

        $bleje = $statement->fetch();

        return $bleje;
    }

    function updateProdukti($id, $name, $price, $discount, $image){
        $conn = $this->connection;

        $sql = "UPDATE bleje SET name=?, price=?, image=?, discount=? WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$name, $price, $image, $discount, $id]);

        return 'Update was successful!';
    }

    function deleteBleje($id){
        $conn = $this->connection;

        $sql = "DELETE FROM bleje WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        return 'Delete was successful!';
        
    }
}
$userRepository = new UserRepository();
$result = $userRepository->deleteBleje(1); // replace 1 with the actual ID you want to delete

echo $result;

?>
