<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || EA Games</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
        <h1><a href="index.php"><b>EA Games</b></a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12">
	  <h1>
	  <strong>
	  <h1>
        <p>EA Games is a project Games Website. All products listed are fake. This project just gives a preview to what a real world implementation of Games Website will look like. </strong></h1>
        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy;  EA Games. All Rights Reserved.</p>
        </footer>
 </h2>
      </div>
    </div>


<img src="images/bolt.jpg" alt="Girl in a jacket" width="100%" height="600">

	

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script> 
      $(document).foundation();
    </script>
  </body>
</html>