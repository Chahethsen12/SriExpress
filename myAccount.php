<?php 
session_start();
require_once 'connection.php';


if(!isset($_SESSION["id"])){

  header("Location: login.php");

}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Account</title>
  <link rel="stylesheet" href="design.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" type="text/css" href="css/dashBoardStyle.css"/>
</head>

<body>
  <style>
    .container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding:25px;
  min-height: 100vh;
  
}
.container table{
  position: absolute;
  top:200px;
  padding:100px;
  width:500px;
  height: 200px;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
}
.deta{
  position:relative;
  left: 20px;
  right:20px;

}
.aboutUs_header a button{
  border:none;
	outline:none;
	height:40px;
	background-color:gray;
	color:black;
	font-size:18px;
	border-radius:20px;
	position:absolute;
	left: 570px;
  top: 470px;
	width:180px;
}
.aboutUs_header a button:hover{
  color:white;
}

    </style>


<?php


$sql="SELECT * FROM `users` WHERE `id`='".$_SESSION["id"]."'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    $row["id"];
    $row["username"];
    $row["email"];
    $row["password"];



?>
 <header>
    <div class="nav">

      <div class="header">
        <div class="header1"></div>
    
        <div class="header2">
          <img class="hedImg" src="image/logoR.jpeg" width="100px" height="100px">
          <nav class="nav">
    
            <ul>
              <li><a href="home.php">HOME</a></li>
    
              <div class="dropdown">
                <span>NADU RICE</span>
                <div class="dropdown-content">
                  <a href="mencasual.php">
                    <p>Polish</p>
                  </a>
                  <a href="menformal.php">
                    <p>Broken</p>
                  </a>
                </div>
              </div>
    
              <div class="dropdown">
                <span>SAMBA RICE</span>
                <div class="dropdown-content">
                  <a href="slipers.php">
                    <p>Polish</p>
                  </a>
                  <a href="shoes.php">
                    <p>Broken</p>
                  </a>
                </div>
              </div>
    
              <div class="dropdown">
                <span>KIRI SAMBA </span>
                <div class="dropdown-content">
                  <a href="school1.php">
                    <p>Polish</p>
                  </a>
                  <a href="casual2.php">
                    <p>Broken</p>
                  </a>
                </div>
              </div>
    
              <div class="dropdown">
                <span>KEKULU</span>
                <div class="dropdown-content">
                  <a href="school2.php">
                    <p>Polish</p>
                  </a>
                  <a href="slipers1.php">
                    <p>Broken</p>
                  </a>
                  
                </div>
              </div>
              
              <li><a href="contactus.php">CONTACT US</a></li>
            </ul>
          </nav>
<div class="container">
<table>
  <tbody>
    <tr>
      <td>
      <h2 calss="deta">Your Account Details</h2>
      <p><strong>User ID: </strong><?php echo $row["id"]?></p>
      <p><strong> Your User Name: </strong><?php echo $row["username"]?></p> 
      <p><strong>Your Email: </strong><?php echo $row["email"]?></p>
        <p><strong>Your Password: </strong><?php echo $row["password"]?></p>

    </div></td>
    </tr>
  </tbody>
</table>
  </div>
<?php
  }
}else{
  echo"No data found";
}
?>
 <div class="aboutUs_header">
			<a href="deliveryview.php"><button>Delivery Details</button></a>
		</div>
</body>
</html>