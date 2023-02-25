<?php
include_once '../Services/MessageService.php';
include_once '../Models/Message.php';

if ($_SERVER['REQUEST_METHOD']==='POST')
{
    if(isset($_POST['btnSubmit']))
    {
        $name = $_POST['txtName'];
        $email = $_POST['txtEmail'];
        $phoneNumber = $_POST['txtPhone'];
        $message = $_POST['txtMsg'];

        header("Location:HomeUser.php");

        $message  = new Message($name,$email,$phoneNumber,$message);
        $messageService = new MessageService();

        $messageService->createMessage($message);
    }
}

?>