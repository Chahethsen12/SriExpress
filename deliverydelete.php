<?php 

session_start();
require_once 'connection.php';

if(!isset($_SESSION["id"])){

  header("Location: singin.php");

}

if(isset($_GET["name"])){

  $name = $_GET["name"];
  
  $sql = "DELETE FROM `delivery` WHERE  `name`='".$name."'";
  
  if (mysqli_query($conn, $sql)) {
    header("Location: myAccount.php");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  }
  else{
    echo("No Data Found");
  }

?>