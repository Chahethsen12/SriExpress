<?php
session_start();
require_once 'connection.php';

    // Retrieve form data
    $name = $_POST['name'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $postal_code = $_POST['postal_code'];
    $phone = $_POST['phone'];



    // Create a new record in the database
    $sql= "INSERT INTO `delivery`(`name`, `country`, `city`, `address`, `postal_code`, `phone`) VALUES
     ('".$name."','".$country."','".$city."','".$address."','".$postal_code."','".$phone."')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the login page
        header("Location: home.php");
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();


?>