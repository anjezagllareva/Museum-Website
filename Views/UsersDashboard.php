<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Museum</title>
    <link rel="stylesheet" href="UsersDashboardStyle.php">
</head>
<body>
  <header><a href="HomeAdmin.php">MuseumEX</a></header>
<div class="navbar">
    <a href="HomeAdmin.php">HOME</a>
    <div class="dropdown">
      <button class="dropbtn">DASHBOARD
      </button>
      <div class="dropdown-content">
        <a href="UsersDashboard.php">Users</a>
        <a href="MessagesDashboard.php">Messages</a>
        <a href="ProductsDashboard.php">Products</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">MUSEUMS
      </button>
      <div class="dropdown-content">
        <a href="Louvre.php">Louvre Museum</a>
        <a href="Uffizi.php">Uffizi Gallery</a>
        <a href="BM.php">The British Museum</a>
        <a href="MMA.php">The Museum of Modern Art</a>
      </div>
  </div>
    <a href="AboutUs.php">ABOUT US</a> 
    <a href="Logout.php">LOG OUT</a>
    </div>
    
    <div class = "header">
      <h1>Users Dashboard</h1>
    </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once '../Services/UserService.php';
        $userService  = new UserService();
        $users = $userService->getAllUsers();
        foreach($users as $user){
           echo 
           "
           <tr>
               <td>$user[Id]</td>
               <td>$user[Name]</td>
               <td>$user[Surname]</td>
               <td>$user[Email]</td>
               <td>$user[Password]</td>
               <td>$user[Role]</td>
               <td><a href='EditUser.php?Id=$user[Id]'>Edit</a></td>
               <td><a href='DeleteUser.php?Id=$user[Id]'>Delete</a></td>

           </tr>
           ";
        }
        ?>
    </body>
    </html>