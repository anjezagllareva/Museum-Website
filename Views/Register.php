<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Museum</title>
    <link rel="stylesheet" href="Registerstyle.php">
</head>
<body>
    <header><a href="Home.php">MuseumEX</a></header>
        <div class="container">
            <div class="centered"></div>
        <script src="register.js"></script>
      </div>
      <div class="container2">
        <div class="inner-container">
      <div id="register-card" class="card">
        <div class="card-body">
            <div class="form-group-name">
              <label for="name" id="name">Name</label>
                <input type="name" class="form-control" id = "name-input" placeholder="Write name" name="Name" required>
            </div>
            <div class="form-group-surname">
              <label for="surname" id="surname">Surname</label>
                <input type="surname" class="form-control" id = "surname-input" placeholder="Write surname" name="Surname" required>
            </div>
            <div class="form-group-email">
                <label for="email" id="email">Email</label>
                  <input type="email" class="form-control" id = "email-input" placeholder="example@gmail.com" name="Email" required>
              </div>
              <div class="form-group-password">
                <label for="password" id="password">Password</label>
                  <input type="password" class="form-control" id = "password-input" placeholder="Password" name="Password" required>
              </div>
              <div class="form-group-confirm">
                <label for="confirm" id="confirm">Confirm Password</label>
                  <input type="password" class="form-control" id = "confirm-input" placeholder="Confirm password" name="Password" required>
              </div>
            <button type="submit" id="button" class="btn" name ="registerButton"
                onclick="validateFormRegister()">Register</button>
                <p id="p1">You have an account?<a href="Login.php"> Login</a></p>

            <script src="register.js"></script>
          </div>
        </div>

</body>
</html>