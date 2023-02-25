<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Museum</title>
    <link rel="stylesheet" href="BMstyle.php">
</head>
<body>
  <header><a href="../HomeAdmin.php">MuseumEX</a></header>
<div class="navbar">
<a href="../HomeAdmin.php">HOME</a>
    <div class="dropdown">
      <button class="dropbtn">DASHBOARD
      </button>
      <div class="dropdown-content">
        <a href="../UsersDashboard.php">Users</a>
        <a href="../MessagesDashboard.php">Messages</a>
        <a href="../ProductsDashboard.php">Products</a>
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
    <a href="AboutUsAdmin.php">ABOUT US</a> 
    <a href="Logout.php">LOG OUT</a>
  </div>
  <?php
        include_once '../../Services/MuseumsAdminService.php';
        $MuseumsAdminService  = new MuseumsAdminService();
        $museumName = "The British Museum";
        $museum = $MuseumsAdminService->getMuseumByName($museumName);
    ?>
        <div class = "content">
          <?php
          echo"<h1>$museum[Name]</h1>
            <p>$museum[Description]</p>";
          ?>
        </div>
        <div class = "live-video">
          <?php
          echo"<iframe width='560' height='315' src='$museum[Url]'></iframe>";
          ?>
          <h1>The British Museum view</h1>
          <p>.</p>
        </div>

        <div class = "artwork">
          <h1>Art Work</h1>
          <hr class = "first-line"></hr>
          <hr class = "second-line"></hr>
          <div id = "first-work">
            <?php
            echo"<img src='$museum[FirstWorkImage]' alt=''>
            <h1>$museum[FirstWorkName]</h1>";
            ?>
          </div>
          <div id = "second-work">
          <?php
            echo"<img src='$museum[SecondWorkImage]' alt=''>
            <h1>$museum[SecondWorkName]</h1>";
            ?>
          </div>
          <div id = "third-work">
          <?php
            echo"<img src='$museum[ThirdWorkImage]' alt=''>
            <h1>$museum[ThirdWorkName]</h1>";
            ?>
          </div>
        </div>
      </div>
  </body>
  </html>