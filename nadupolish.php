<?php
session_start();
require_once 'connection.php';

// Example items for demonstration. Replace with your actual items or session data.
$_SESSION['cart'] = $_SESSION['cart'] ?? [
    ['name' => 'RICE 01', 'price' => 1800],
    ['name' => 'RICE 02', 'price' => 2500]
    // Add more items as needed
];

if (!isset($_SESSION["id"])) {
    header("Location: login.php");
    exit; // Terminate further execution
}

// Convert PHP cart to JSON for JavaScript
$cart_items_json = json_encode($_SESSION['cart']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fariz Rice Mill</title>
  <link rel="stylesheet" href="design.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script>
    const itemList = <?php echo $cart_items_json; ?>;
</script>
</head>
<body>
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
                  <a href="nadupolish.php">
                    <p>Polish</p>
                  </a>
                  <a href="nadubroken.php">
                    <p>Broken</a></li></p>
                  </a>
                </div>
              </div>
    
              <div class="dropdown">
                <span>SAMBA RICE</span>
                <div class="dropdown-content">
                  <a href="sambapolish.php">
                    <p>Polish</p>
                  </a>
                  <a href="sambabroken.php">
                    <p>Broken</p>
                  </a>
                </div>
              </div>
    
              <div class="dropdown">
                <span>KIRI SAMBA</span>
                <div class="dropdown-content">
                  <a href="kirisambapolish.php">
                    <p>Polish</p>
                  </a>
                  <a href="kirisambabroken.php">
                    <p>Broken</p>
                  </a>
                </div>
              </div>
    
              <div class="dropdown">
                <span>KEKULU</span>
                <div class="dropdown-content">
                  <a href="kekulupolish.php">
                    <p>Polish</p>
                  </a>
                  <a href="kekulubroken.php">
                    <p>Broken</p>
                  </a>
                </div>
              </div>
              
              <li><a href="contactus.php">CONTACT US</a></li>
            </ul>
          </nav>

        <form method="post">

      <div class="box">
        <div class="cart-count"><?php echo count($_SESSION['cart']); ?></div>
        <ion-icon name="cart"  id="cart-icon" ></ion-icon>
      </div>

      <div class="cart">
        <div class="cart-title">Cart Items</div>
        <div class="cart-content">
            
        </div>
        
        <div class="total">
            <div class="total-title">Total</div>
            <div class="total-price">Rs. 0</div>
        </div>
      
      <button  type="submit" name="place_order" class="btn-buy">Place Order</button>
      
      <ion-icon name="close" id="cart-close"></ion-icon>

      </div>
      </form>

    </div>
  </header>
  <div class="container">
    <h2 class="title">Happy shopping </h2>
    <div class="shop-content">


      <div class="food-box">
        <div class="pic">
          <img src="image/" class="food-img" width="250px" height="240px">
        </div>
        <h2 class="food-title">RICE 01</h2>
        <span class="food-price">Rs.1800</span>

        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>


      <div class="food-box">
        <div class="pic"><img src="image/" class="food-img" width="250px" height="240px"></div>
        <h2 class="food-title">RICE 02</h2>
        <span class="food-price">Rs.2500</span>

        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  
      <div class="food-box">
        <div class="pic"><img src="image/" class="food-img" width="250px" height="240px"></div>
        <h2 class="food-title">RICE 03 </h2>
        <span class="food-price">Rs.3300</span>
      

        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  
      <div class="food-box">
        <div class="pic"><img src="image/" class="food-img" width="250px" height="240px"></div>
        <h2 class="food-title">RICE 04 </h2>
        <span class="food-price">Rs.2600</span>
       
>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  
      <div class="food-box">
        <div class="pic"><img src="image/" class="food-img"width="250px" height="240px"></div>
        <h2 class="food-title">RICE 05 </h2>
        <span class="food-price">Rs.2990</span>
     
       
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  
      <div class="food-box">
        <div class="pic"><img src="image/" class="food-img"width="250px" height="240px"></div>
        <h2 class="food-title">RICE 06</h2>
        <span class="food-price">Rs.4200</span>
      
       
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  
  
      <div class="food-box">
        <div class="pic"><img src="image/" class="food-img"width="250px" height="240px"></div>
        <h2 class="food-title">RICE 07</h2>
        <span class="food-price">Rs.1800</span>
        
      
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  
  
      <div class="food-box">
        <div class="pic"><img src="image/" class="food-img"width="250px" height="240px"></div>
        <h2 class="food-title">RICE 08 </h2>
        <span class="food-price">Rs.4000</span>
      
       
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  
      <div class="food-box">
        <div class="pic"><img src="image/" class="food-img"width="250px" height="240px"></div>
        <h2 class="food-title">RICE 09</h2>
        <span class="food-price">Rs.3990</span>
        
       
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  
      <div class="food-box">
        <div class="pic"><img src="image/" class="food-img" width="250px" height="240px"></div>
        <h2 class="food-title">RICE 10 </h2>
        <span class="food-price">Rs.2500</span>
        <ion-icon name="cart" class="add-cart"></ion-icon>
      </div>
  
    </div>
  
  </div>

  <footer>
    <div class="footer-container">
      <div class="row">
        <div class="footer-col">
          <div class="footer1">
            <h2 class="heading2">About</h2>
            <p>Fariz Rice Mill...</p>
          </div>
        </div>
        <div class="footer2">
          <div class="col">
            <h2 class="heading2">Contact Us</h2>
            <li><p>Address: Kekanadura,
              Matara</p></li>
            <li><p>Phone: 0779227147</p></li>
            <li><p>Email: <a href="mailto:farizmk7@gmail.com">farizmk7@gmail.com</a></p></li>
          </div>
        </div>
        <div class="footer3">
          <div class="col">
            <h2 class="heading2">Follow Us</h2>
            <div class="social-icon">
              <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
              <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
              <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
              <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>

  <script src="design.js"></script>
</body>
</html>
