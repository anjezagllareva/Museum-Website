<?php

include_once '../Services/UserService.php';
include_once '../Models/RegisterUser.php';
include_once '../Models/LoginUser.php';

if ($_SERVER['REQUEST_METHOD']==='POST')
{
    if(isset($_POST['registerButton']))
    {
        $name = $_POST['Name'];
        $surname = $_POST['Surname'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];

        header("Location:Login.php");

        $registerUser  = new RegisterUser($name,$surname,$email,$password);
        $userService = new UserService();
    
        $userService->createUser($registerUser);
    }
    if(isset($_POST['loginButton']))
    {
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        // header("Location: Login.php");
        $loginUser  = new LoginUser($email,$password);
        $userService = new UserService();
        $user = $userService->readUser($loginUser);

        if($user["Email"] == $email && $user["Password"] == $password)
        {
            if($user["Role"] == 1)
            {
                header("Location: HomeAdmin.php");
            }
            else
            {
                header("Location: HomeUser.php");
            }
        }
        else
        {
            $alert = "<script>alert('Invalid email and password!');</script>";
            echo $alert;
            echo "<script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href = 'Login.php' );
            }
        </script>";
        // header("Location: Login.php");
        }
    }
}

?>