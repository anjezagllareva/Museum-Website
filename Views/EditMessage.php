<?php
include_once '../Services/MessageService.php';

$messageId = $_GET['Id'];

$messageService = new MessageService();

$message = $messageService->getMessageById($messageId);

?>

<link rel="stylesheet" href="EditMessageStyle.php">
<form action="" method="POST">
        <input type="text" name="Id" value="<?=$message['Id']?>" readonly> <br><br>
        <input type="text" name="Name" value="<?=$message['Name']?>"> <br><br>
        <input type="text" name="Email" value="<?=$message['Email']?>"> <br><br>
        <input type="text" name="PhoneNumber" value="<?=$message['PhoneNumber']?>"> <br><br>
        <input type="text" name="Message" value="<?=$message['Message']?>"> <br><br>      

        <input type="submit" name="save" value="save"> <br><br>
</form>


<?php
if(isset($_POST['save'])){
    $id = $messageId;
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phoneNumber = $_POST['PhoneNumber'];
    $message = $_POST['Message'];

    $messageService->updateMessage($id,$name,$email,$phoneNumber,$message);
    header("location:MessagesDashboard.php");
}

?>