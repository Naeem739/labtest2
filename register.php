<?php

include "dbconnect.php"; 


if(isset($_POST['register'])){
  $name = $_POST['f_name']; 
  $username = $_POST['f_username']; 
  $email = $_POST['f_email']; 
  $password = $_POST['f_password']; 

$sql = "INSERT INTO student (id, name,username,email,password) 
VALUES (NULL, '$name', '$username', '$email','$password')";


if($conn->query($sql))
{
header('location:login.php');
    
}
else
{
    echo "insertion failed";
}

}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="stylereg.css">
  <style>
    .center {
      text-align: center;
      margin-top: 20px;
    }

    .center a {
      text-decoration: none;
    }
  </style>
</head>
<body>

<h2>Registration Form</h2>

<form action="register.php" method="POST" >
  
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="f_name" required><br><br>

  <label for="username">Username:</label><br>
  <input type="text" id="username" name="f_username" required><br><br>

  <label for="email">Email:</label><br>
  <input type="email" id="email" name="f_email" required><br><br>

  <label for="password">Password:</label><br>
  <input type="password" id="password" name="f_password" required><br><br>

  <input type="submit" name = "register" value="register">
</form>


<div class="center">
  <p>Already  have an account? <a href="login.php">Login</a></p>
</div>


</body>
</html>
