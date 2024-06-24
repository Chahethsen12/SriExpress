<?php 
session_start();
require_once 'connection.php';
?>

<html>
<head>
<title>Fariz rice mill Login</title>
<link rel="stylesheet" type="text/css" href="logsign.css">
</head>
<body>

<div class = "form">
<h1>Login Here</h1>
<form action="loginhandler.php" method="POST">
<label>User Name</label>
<input type="text" name="username" placeholder="Enter User Name">
<br>
<label>Password</label>
<input type="Password" name="Password" placeholder="Enter Password">
<br>
<a href="#"><b>Forgot Password?<b></a>
<br>
<br>
<input type="submit" name="submit" value="login">
<br>
<br>
<br>
<label>Don't have an Account<a href="signup.php"><br><u>Sign Up</u></a></label>
</form>


</div>

</body>

</html>