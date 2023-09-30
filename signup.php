<?php
require'connect.php';

// retiriving data

if($_SERVER["REQUEST_METHOD"]==="POST"){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];


// validation

if(empty($_POST['username'])){
  die('please enter the username');

}

if(empty($_POST['email'])){
  die('please enter your email');

} else if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
  die('enter valid email adress');
}

if(empty($_POST['password'])){
  die("please enter the password");
}

if($_POST['password']!== $_POST['password2']){
  die('password did not match');
}



$query = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";

$result = mysqli_query($conn,$query);

if(!$result){
  echo("form did't submitted");
} else {
  header("location:signupsucess.html");
}




}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="signup.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TRAVEL|SignUP</title>
  </head>
  <body>
    <div class="container">
        <div class="form-container" novalidate>
          <form  method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="password">Confirm Password:</label>
            <input type="password" id="password2" name="password2" required>

            <input type="submit" value="Sign-Up">
          </form>
        </div>
      </div>
  </body>
</html>
