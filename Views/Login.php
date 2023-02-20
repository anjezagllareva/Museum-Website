<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Museum</title>
    <link rel="stylesheet" href="Loginstyle.php">
</head>
<body>
    <header><a href="Home.php">MuseumEX</a></header>
        <div class="container">
            <div class="centered"></div>
        <script src="login.js"></script>
      </div>
      <div class="container2">
        <div class="inner-container">
      <div id="login-card" class="card">
      <form method="post" id="form" class="form" name="loginForm">
        <div class="card-body">
            <div class="form-group-email">
              <label for="email" id="email">Email</label>
                <input type="email" class="form-control" id = "email-input" placeholder="example@gmail.com" name="Email" required>
            </div>
            <div class="form-group-password">
              <label for="password" id="password">Password</label>
                <input type="password" class="form-control" id = "password-input" placeholder="password"
                    name="Password" required>
            </div>
            <button type="submit" id="button" class="btn" name ="loginButton"
                onclick="validateForm()">Login</button>
            </form>
            <?php include_once '../Controllers/UserController.php';?>
                <a href="Register.php"> Register?</a></p>
                
            <script src="login.js"></script>
          </div>
        </div>
    </body>
    </html>