<?php include 'connect.php';
if (isset($_POST['loginbtn'])) {
$user_name = $_POST['username'];
$user_password = $_POST['password'];




  $sql = "SELECT user_name, user_password FROM users WHERE user_name = '" . $user_name . "'";
  
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      if (md5($user_password) == $row['user_password']) {
        header("Location: successlogin.php");
      }
    }
  } else {

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
      <h1>Login</h1>
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <input type="submit" name="loginbtn" value="Login">
      <a class="link" href="register.php">Dont have an account? register here! </a>
    </form>

  </body>
</html>
