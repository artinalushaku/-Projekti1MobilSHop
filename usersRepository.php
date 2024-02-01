<?php 
include_once 'DatabaseConnection2.php';

class UsersRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertUsers($users) {
        $conn = $this->connection;

        $id = $user->getId();
        $firstname = $user->getFirstname();
        $lastname = $user->getLastname();
        $password = $user->getPassword();
        $confirm_password = $user->getConfirmpassword();
        $role = $user->getRole();

        $sql = "INSERT INTO users (id, firstname, lastname, password, confirm_password, role) VALUES (?, ?, ?, ?, ?, ?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id, $firstname, $lastname, $password, $confirm_password, $role]);

        echo "<script> alert('User has been inserted successfully!'); </script>";
    }

    function getAllUsers() {
        $conn = $this->connection;

        $sql = "SELECT * FROM users";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUsersById($id) {
        $conn = $this->connection;

        $sql = "SELECT * FROM users WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUsers($id, $firstname, $lastname, $password, $confirm_password, $role) {
        $conn = $this->connection;

        $sql = "UPDATE users SET firstname=?, lastname=?, password=?, confirm_password=?, role=? WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$firstname, $lastname, $password, $confirm_password, $role, $id]);

        echo "<script>alert('Update was successful');</script>";
    } 

    function deleteUsers($id) {
        $conn = $this->connection;

        $sql = "DELETE FROM users WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('Delete was successful');</script>";
   } 
}
?>
