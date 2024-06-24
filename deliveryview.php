
<?php 
session_start();
require_once 'connection.php';




?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>delivery details</title>
<style>
    body{
        
        background-color:black;
    }
    .container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding:25px;
  min-height: 100vh;
    }
    .container table{
  position: absolute;
  top:100px;
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
</style>
   
</head>

<body>





</div>
  
<?php 



  $sql = "SELECT `name`, `country`, `city`, `address`, `postal_code`, `phone` FROM `delivery` WHERE 1";











$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {





  while($row = mysqli_fetch_assoc($result)) {

    $name = $row["name"];
?>



    <div class="column">
    <div class="card">
      <p></p>
      <div class="container">
      <table>
  <tbody>
    <tr>
      <td>
      <h1 calss="deta">Your Delivery Details</h1>
        <h3> <?php  echo($row["name"]);  ?> </h3>        
        <p>Country :<?php  echo($row["country"]);  ?> </p>  
        <p>City : <?php  echo($row["city"]);  ?> </p> 
        <p>address : <?php  echo($row["address"]);  ?> </p>
        <p>Postal code : <?php  echo($row["postal_code"]);  ?> </p>
        <p>Phone: <?php  echo($row["phone"]);  ?> </p>
        
        <a class='btn btn-primary btn-sm' href='#?name=<?php echo $row["name"]; ?>'>Edit</a>
        <a class='btn btn-primary btn-sm' href='deliverydelete.php?name=<?php echo $row["name"]; ?>'>Delete</a>
        </td>
    </tr>
  </tbody>
</table>
</div>
    </div>  
  </div>


<?php
    
  
  }

}else{

  echo("No data fonud");

}



  ?>

</div> 
</body>
</html>
