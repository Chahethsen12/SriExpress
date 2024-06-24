<?php 
session_start();
require_once 'connection.php';

if(isset($_POST['submit'])){

  $susername = $_POST['username'];
  $spassword = $_POST['Password'];



  $sql= "SELECT * FROM `users` WHERE `username`= '".$susername."' AND `password`='".$spassword."'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result)>0) {
    $row=mysqli_fetch_assoc($result);
        $_SESSION["id"]=$row["id"];

    header("Location: home.php");
} else {
   
    header("Location: login.php?Error=No User Found");
}   

}

?>