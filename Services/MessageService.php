<?php 
include_once '../Database/DatabaseConnection.php';

class MessageService{
    private $connection;

    function __construct()
    {
        $databaseConnection = new DatabaseConnection;
        $this->connection = $databaseConnection->startConnection();
    }

    function createMessage($message)
    {
        $databaseConnection = $this->connection;
        $name = $message->getMessageName();
        $email = $message->getMessageEmail();
        $phoneNumber = $message->getMessagePhoneNumber();
        $messagetxt = $message->getMessage();

        $sql = "INSERT INTO messages (Name, Email, PhoneNumber, Message) VALUES (?,?,?,?)";

        $statement = $databaseConnection->prepare($sql);

        $statement->execute([$name,$email,$phoneNumber,$messagetxt]);
        // $statement->execute([1,'Diellza','diellza@gjirafa.com','test','Test message']);
        echo "<script> alert('User '$name' has been inserted successfuly!'); </script>";
    }

    function getAllMessages(){
        $databaseConnection = $this->connection;

        $sql = "SELECT * FROM messages";

        $statement = $databaseConnection->query($sql);
        $messages = $statement->fetchAll();

        return $messages;
    }
    
    function getMessageById($Id){
        $databaseConnection = $this->connection;

        $sql = "SELECT * FROM messages WHERE id='$Id'";

        $statement = $databaseConnection->query($sql);
        $message = $statement->fetch();

        return $message;
    }

    function updateMessage($id,$name,$email,$phoneNumber,$message){

        $databaseConnection = $this->connection;

        $sql = "UPDATE messages SET Id=?, Name=?, Email=?, PhoneNumber=?, Message=? WHERE id=$id";

        $statement = $databaseConnection->prepare($sql);

        $statement->execute([$id,$name,$email,$phoneNumber,$message]);

        echo "<script>alert('update was successful'); </script>";
   } 

   function deleteMessage($Id){
    
        $databaseConnection = $this->connection;

        $sql = "DELETE FROM messages WHERE Id=?";

        $statement = $databaseConnection->prepare($sql);

        $statement->execute([$Id]);

        echo "<script>alert('delete was successful'); </script>";
    } 
}
?>