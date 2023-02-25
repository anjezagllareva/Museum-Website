<?php

include_once '../Services/UserService.php';
$Id = $_GET['Id'];
$userService = new UserService();

$userService->deleteUser($Id);

header("location:UsersDashboard.php");
?>