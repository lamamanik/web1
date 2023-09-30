<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $conn = require __DIR__ . "/connect.php";

  $username = mysqli_real_escape_string($conn, $_POST["username"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]);

  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = $conn->query($sql);

  if ($result !== false && $result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if ($password === $user["password"]) {
      header("location:dashboard.php");

      exit();
    } else {
      echo 'Invalid username or password!';
    }
  } else {
    echo 'Invalid username or password!';
  }

  $conn->close();
}
?>








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TRAVEL|LOGIN</title>
  </head>
  <body>
    <div class="container">
      <div class="form-container">
        <h2>LOG-IN</h2>
        <form  method="POST">
          <label for="username">Username:</label>
          <link rel="stylesheet" href="login.css" />
          <input type="text" id="username" name="username" required />

          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required />

          <input type="submit" value="Login" />
          <p>are you a new user then you can <a href="signup.php">Signup</a></p>
        </form>
      </div>
    </div>
  </body>
</html>
