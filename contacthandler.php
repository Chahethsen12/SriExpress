<?php
session_start();
require_once 'connection.php';

    // Retrieve form data
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $msg = $_POST['msg'];


    // Create a new record in the database
    $sql= "INSERT INTO `contact`(`firstName`, `lastName`, `email`, `mobile`, `msg`) VALUES
     ('".$firstname."','".$lastname."','".$email."','".$mobile."','".$msg."')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the login page
        header("Location: home.php");
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();


?>