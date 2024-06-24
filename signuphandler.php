<?php
session_start();
require_once 'connection.php';

    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    
    $sql= "INSERT INTO `users`(`username`, `email`, `password`)
        VALUES ('".$username."','".$email."','".$password."')";

    if ($conn->query($sql) === TRUE) {
        
        header("Location: login.php");
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();


?>