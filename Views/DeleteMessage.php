<?php

include_once '../Services/MessageService.php';
$Id = $_GET['Id'];
$messageService = new MessageService();

$messageService->deleteMessage($Id);

header("location:MessagesDashboard.php");
?>