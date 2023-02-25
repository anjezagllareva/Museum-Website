<?php
include_once '../Services/UserService.php';

$userId = $_GET['Id'];

$userService = new UserService();

$user = $userService->getUserById($userId);

?>

<link rel="stylesheet" href="EditUserStyle.php">
<form action="" method="POST">
        <input type="text" name="Id" value="<?=$user['Id']?>" readonly> <br><br>
        <input type="text" name="Name" value="<?=$user['Name']?>"> <br><br>
        <input type="text" name="Surname" value="<?=$user['Surname']?>"> <br><br>
        <input type="text" name="Email" value="<?=$user['Email']?>"> <br><br>
        <input type="text" name="Password" value="<?=$user['Password']?>"> <br><br>
        <input type="text" name="Role" value="<?=$user['Role']?>"> <br><br>
      

        <input type="submit" name="save" value="save"> <br><br>
</form>


<?php
if(isset($_POST['save'])){
    $id = $userId;
    $name = $_POST['Name'];
    $surname = $_POST['Surname'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $role = $_POST['Role'];

    $userService->updateUser($id,$name,$surname,$email,$password, $role);
    header("location:UsersDashboard.php");
}

?>