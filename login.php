<?php
	session_start(); //this function is used to put value in $_SESSION supergolbal variable
	include "dbconnect.php";
	
	
	if(isset($_POST['login'])){  //isset is a function which is used to check whether a variable hold a value or not
	
		$eml=$_POST['email'];
		$sql="SELECT * FROM student WHERE email='$eml'";
		
		$result=$conn->query($sql);
		$r=$result->fetch_assoc();
		//echo $result->num_rows;
		if($result->num_rows==1){
			$_SESSION['name']=$r['name'];
			$_SESSION['username']=$r['username'];
			$_SESSION['email']=$r['email'];
			
			header('location:index.php');
			
		}
		else {
			echo"<span style='color:red; font-weight:bold;'> Roll or Email is wrong ";
		}
	}
		


?>






<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="stylelogin.css">
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

<h2>Login Form</h2>

<form action="login.php" method = "POST" >
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" required><br><br>

  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password" required><br><br>

  <input type="submit" name ="login" value="Login">

  <div class="center">
  <p>Don't have an account? <a href="register.php">register</a></p>
</div>

</form>

</body>
</html>
