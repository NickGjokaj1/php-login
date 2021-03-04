<?php
include 'connect.php';
if (isset($_POST['registerbtn'])) {
$user_name = $_POST['username'];
$user_password = $_POST['password'];
$user_email = $_POST['email'];
$user_password = md5($user_password);

$sql = "INSERT INTO users (user_name, user_password, user_email)
VALUES ('" . $user_name ."' , '" . $user_password ."' , '" .$user_email . "')";

if ($conn->query($sql) === TRUE) {
header("Location: successlogin.php");
} else {
  echo "invalid info";
}

$conn->close();
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form class="box" method="post">
      <h1>Register</h1>
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <input type="email" name="email" placeholder="Email">
      <input type="submit" name="registerbtn" value="Login">
      <a class="link" href="index.php">already have an account? login </a>
    </form>

  </body>
</html>
