<?php
session_start();
?>
<html>

<head>
    <title>Fariz Rice Mill</title>
    <link rel="stylesheet" type="text/css" href="home.css">
</head>

<body>

    <header>
        <div class="header">
            <div class="header1">

            </div>

            <div class="header2">
                <img src="image/logoR.jpeg" width="100px" height="100px">

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
                                        <p>Broken</p>
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
                        <?php
                        if(isset($_SESSION["id"])){
                            ?>
                            <li><a href="myAccount.php">MY ACCOUNT</a></li>
                             <li><a href="logout.php">LOGOUT</a></li>
                             
                        <?php
                        }
                        ?>
                        



                    </ul>
                </nav>
                <?php
                if(!isset($_SESSION["id"])){
                    ?>
                    <a href="signup.php"><button class="b1" id="mybutton1">REGISTER</button></a>
                <a href="login.php"><button class="b2" id="mybutton2">LOGIN</button></a>
                <?php

                }
                ?>


                


            </div>
        </div>


        <div class="backimge">


            <div class="topic">
                <h2 class="topic1">WELCOME<br>To </h2>
                <h2 class="topic2">Fariz Rice Mill</h2>
                <p class="topic4"><b>"Your Best Choice"<br>25% OFF HOLIDAY SALE<b></p>
            </div>
        </div>

    </header>


    <h2 class="topic5">Your Best Choice</h2>
    <div class="photo">

        <div class="photo1">

            <img src="image/rice1.jpg" width="250px" height="300px">
        </div>
        <div class="photo2">

            <img src="image/rice2.jpg" width="250px" height="300px">
        </div>
        <div class="photo3">

            <img src="image/rice3.jpg" width="250px" height="300px">
        </div>
        <div class="photo4">

            <img src="image/rice4.jpg" width="250px" height="300px">


        </div>
    </div>
    <div class="Topics">
    <h1 class="topic6">Who we are</h1>
    <p> "   Fariz rice mill is a more than 25 year old trusted rice 
        mill in Kurunegala. We always deliver quality rice products to our 
        customers and never dissapoint from our products."</p>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="footer1">
                    <div class="col">
                        <h2 class="heading2">Quik Links</h2>
                        <li><a href="home.php">HOME</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href="myAccount.php">My Account</a></li>
                        <li><a href="logout.php">Logout</a></li>



                    </div>
                    <div class="col">
                        <h2 class="heading2">Branch</h2>
                        <li><a href="##">Kurunagala</a></li>
                        <li><a href="##">Mathara</a></li>
                        <li><a href="##">Kandy</a></li>

                    </div>
                    <div class="col">
                        <h2 class="heading2">Contact Us</h2>
                        <li><a href="##">Facebook</a></li>
                        <li><a href="##">E-mail</a></li>
                        <li><a href="##">Whatsapp</a></li>

                    </div>
                    <div class="col">
                        <h2 class="heading2">Follow Us</h2>
                        <li><a href="##"><svg class="social1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg></a></li>
                        <li><a href="##"><svg class="social2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg></a></li>
                        <li><a href="##"><svg class="social3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                    <path
                                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                </svg></a></li>
                    </div>

                </div>
            </div>
        </div>

    </footer>
    <script src="home.js"></script>
</body>

</html>