<?php
session_start();
require_once 'connection.php';

if (!isset($_SESSION["id"])) {
    header("Location: login.php");
    exit; // Terminate further execution
}

// Ensure form data is set before accessing
if(isset($_POST['name'], $_POST['country'], $_POST['city'], $_POST['address'], $_POST['postal_code'], $_POST['phone'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $postal_code = $_POST['postal_code'];
    $phone = $_POST['phone'];

    if (isset($_POST["submit"])) {
        // Fetch the user id associated with the phone number
        $user_id = $_SESSION["id"];

        // Insert delivery information into the database
        $sql = "INSERT INTO `delivery`(`name`, `country`, `city`, `address`, `postal_code`, `phone`, `user_id`) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssii", $name, $country, $city, $address, $postal_code, $phone, $user_id);

        if ($stmt->execute()) {
            // Redirect to the home page
            header("Location: home.php");
            exit();
        } else {
            echo "<script>alert('Error: " . $conn->error . "');</script>";
        }
    } else {
        echo "<script>alert('Error: No user found with the provided phone number.');</script>";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "<script>alert('Error: Form data is not complete.');</script>";
}

// Close the connection
$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
  <title>Delivery System</title>
  
  <style>
body{
	margin: 55px;
	padding:0;
	background:url(DELIVERY.png);
	width:500px;
	height:500px;
	background-size:Cover;
	font-family:sans-serif;
	text-align: center;
}
    .form-group {
      margin-bottom: 15px;
	  
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="tel"] {
      width: 100%;
      padding: 5px;
    }

    input[type="submit"] {
      background-color: gray;
      color: white;
      padding: 10px 15px;
      border: none;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: GRAY;
	  color: red;

      
    }

	</style>
</head>
<body>

<div class = "form">
  <h1>Cash on Delivery<br></h1>
  <h2>Please fill this form and submit.</h2>
  <form action="deliveryhandler.php" method="POST">
  <div class="form-group"></div>
    <label for="name">Name:</label>
    <input type="name" id="name" name="name" required>
  </div>

  <div class="form-group">
    <label for="country">Country:</label>
    <input type="country" id="country" name="country" required>
  </div>

  <div class="form-group">
    <label for="city">City:</label>
    <input type="city" id="city" name="city" required>
  </div>

  <div class="form-group">
      <label for="address">Address:</label>
      <input type="address" id="address" name="address" required>
    </div>

  <div class="form-group">
    <label for="postal-code">Postal Code:</label>
    <input type="postal_code" id="postal-code" name="postal_code" required>
  </div>

  <div class="form-group">
    <label for="phone">Phone Number:</label>
    <input type="phone" id="phone" name="phone" required>
  </div>
 
  <br>
  <input type="submit" name="submit" value="Submit">
  <br>
  <br>
 
  </form>
  
  
  </div>
</body>
</html>