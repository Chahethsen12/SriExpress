<?php
include('connection.php');
?>

<script>
    function validateName()
    {
    var fname = document.getElementById("txtFullName").value;
    
    if((fname=="" || fname==null))
    {
    alert("Please enter your full name");
    return false;
    }
    return true;
    
    }
    
    function validateEmail()
    {
    var email = document.getElementById("txtEmail").value;
    var at = email.indexOf("@");
    var dt = email.indexOf(".");
    
    if((at<0) || (dt<0))
    {
    alert("Please enter a valid email");
    return false;
    }
    return true;
    
    }
    
    function validatePassword()
    {
    var pw= document.getElementById("txtPassword").value;
    var cpw= document.getElementById("txtConfirmPassword").value;
    if((pw!=cpw ) || (pw.length <5))
    {
    alert("Please enter a correct password");
    return false;
    }
    
    return true;
    
    
    function validateAll()
    {
    if (validateName() && validateEmail() &&  validatePassword() && validateNID()  )
    {
    alert("Your Account has created. Thank you!");
    }
    else 
    {
    event.preventDefault();
    }
    
    }
    </script>

<html>
<head>
<title>Fariz Rice Mill</title>
<link rel="stylesheet" type="text/css" href="logsign.css">
</head>
<body>
<div class="form">
<h1>Sign Up Here</h1>
<form method="POST" action="signuphandler.php">
<div class="data">
<label>User Name</label>
<input type="text" name="username" id="txtFullName"placeholder="Enter UserName">
<br>
<label>Email</label>
<br>
<input type="email" name="email" id="txtEmail"placeholder="Enter Email">
<br>
<label>Password</label>
<input type="password" name="password" id="txtPassword" placeholder="Enter Password">
<br>
<label>Confirm Password</label>
<input type="password" name="confirm_password" id="txtConfirmPassword" placeholder="ReEnter Password">
<br>
</div>

<input type="submit" name="submit" value="Sign Up">
<br>
<br>
<br>
<label>Already have an Account? <a href="login.php"><u>Login</u></a></label>
</form>

</div>

</body>
</html>