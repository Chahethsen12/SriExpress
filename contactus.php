<?php 
session_start();
require_once 'connection.php';


if(!isset($_SESSION["id"])){

  header("Location: login.php");

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>
	<link rel="stylesheet" href="contact.css">
</head>
<body>
	
	<div class="contactUs">
		<div class="conUs_header">
			<a href="home.php"><button>Home</button></a>
		</div>
		<form action="contacthandler.php" method="POST">
			<h4>Contact Us</h4>
			<input type="firstName" name="firstName" placeholder="First Name" required>
			<input type="lastName" name="lastName" placeholder="Last Name" required>
			<input type="email" name="email" placeholder="E-mail" required>
			<input type="mobile" name="mobile" placeholder="Mobile No" required>
			<h4>Type your message here...</h4>
			<textarea type="msg" name="msg" required></textarea>
			<input type="submit" value="send" id="button">
	
	
		</form>
	</div>
</body>
</html>