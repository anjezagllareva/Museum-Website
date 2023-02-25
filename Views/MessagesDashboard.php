
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Museum</title>
    <link rel="stylesheet" href="MessagesDashboardStyle.php">
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
      <h1>Messages Dashboard</h1>
    </div>
    <div class = "header">
      <h1>Messages Dashboard</h1>
    </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>PhoneNumber</th>
            <th>Message</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once '../Services/MessageService.php';
        $messageService  = new MessageService();
        $messages = $messageService->getAllMessages();
        foreach($messages as $message){
           echo 
           "
           <tr>
               <td>$message[Id]</td>
               <td>$message[Name]</td>
               <td>$message[Email]</td>
               <td>$message[PhoneNumber]</td>
               <td>$message[Message]</td>
               <td><a href='EditMessage.php?Id=$message[Id]'>Edit</a></td>
               <td><a href='DeleteMessage.php?Id=$message[Id]'>Delete</a></td>

           </tr>
           ";
        }
        ?>
</body>
    </html>
