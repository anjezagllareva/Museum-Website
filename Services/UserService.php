<?php 
include_once '../Database/DatabaseConnection.php';
session_start();
class UserService{
    private $connection;
    function __construct()
    {
        $databaseConnection = new DatabaseConnection;
        $this->connection = $databaseConnection->startConnection();
    }

    function createUser($user)
    {
        $databaseConnection = $this->connection;
        $name = $user->getUserName();
        $surname = $user->getUserSurname();
        $email = $user->getUserEmail();
        $password = $user->getUserPassword();

        $sql = "INSERT INTO user (Name, Surname, Email, Password, Role) VALUES (?,?,?,?,?)";

        $statement = $databaseConnection->prepare($sql);

        $statement->execute([$name,$surname,$email,$password, 2]);
        // Insert Admin
        //  $statement->execute([1,'Anjeza','Gllareva','anjezagllarevaa@gmail.com','Anjeza123',1]);

        echo "<script> alert('User '$name $surname' has been inserted successfuly!'); </script>";
    }

    function readUser($loginUser)
    {
        $databaseConnection = $this->connection;
        $email = $loginUser->getLoginUserEmail();
        $password = $loginUser->getLoginUserPassword();

        $sql = "SELECT * FROM user WHERE Email='$email'";

        $statement = $databaseConnection->query($sql);
        $user = $statement->fetch();
        return $user;
    }

    function getAllUsers(){
        $databaseConnection = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $databaseConnection->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($Id){
        $databaseConnection = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$Id'";

        $statement = $databaseConnection->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id,$name,$surname,$email,$password,$role){
         $databaseConnection = $this->connection;

         $sql = "UPDATE user SET Id=?, Name=?, Surname=?, Email=?, Password=?, Role=? WHERE id=$id";

         $statement = $databaseConnection->prepare($sql);

         $statement->execute([$id,$name,$surname,$email,$password,$role]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteUser($Id){
        $databaseConnection = $this->connection;

        $sql = "DELETE FROM user WHERE Id=?";

        $statement = $databaseConnection->prepare($sql);

        $statement->execute([$Id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}


?>