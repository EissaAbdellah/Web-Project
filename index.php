<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EA Games </title>
    <link rel="stylesheet" href="css/foundation.css" />
	<style>
* {
  box-sizing:border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.container {
  padding: 64px;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-66 {
  float: left;
  width: 66.66666%;
  padding: 20px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}

.large-font {
  font-size: 48px;
}

.xlarge-font {
  font-size: 64px
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #4CAF50;
}

img {
  display: block;
  height: auto;
  max-width: 100%;
}

@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
  }
  img {
    margin: auto;
  }
}
</style>
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php"><b>EA GAMES</b></a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log in</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>
    </script>
	
<!-- Pro Evolution Soccer 2019  -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>Pro Evolution Soccer 2019 </b></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"><b>Why it?</b></h1>
      <p><span style="font-size:36px">Pro Evolution Soccer 2019.</span> Player individuality has been taken to the next level with 11 new skill traits. Score great goals with improved shooting motion & animation, and see stamina have an impact with Visible Fatigue Every element has been redone, from how you sign players, to special versions of players released throughout the year.</p>
    
	  <a href="https://www.konami.com/wepes/2019/eu/en/" target="_blank">
   <button class="button">Download </button>
</a>
	  
	  
    </div>
    <div class="column-33">
        <img src="images/pro1.jpg" width="335" height="471">
		 <img src="images/pro2.jpg" width="335" height="471">
		  <img src="images/pro3.jpg" width="335" height="471">
    </div>
  </div>
</div>




<!-- Hitman 2 Gold Edition-->
<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33">
      <img src="images/hitman1.jpg" width="335" height="471">
	  <img src="images/hitman2.jpg" width="335" height="471">
	  <img src="images/hitman3.jpg" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"><b>Hitman 2 Gold Edition</b></h1>
      <h1 class="large-font" style="color:red;"><b>why it ?</b></h1>
      <p><span style="font-size:24px">Travel the globe and track your targets across exotic sandbox locations in HITMAN™ 2.</span> From sun-drenched streets to dark and dangerous rainforests, nowhere is safe from the world’s most creative assassin, Agent 47.</p>
       <a href="https://hitman.com/purchase" target="_blank">
	  <button class="button" style="background-color:red">Download</button>
	  </a>
    </div>
  </div>
</div>
	<!-- Call of Cthulhu -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>Call of Cthulhu</b></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"><b>Why it?</b></h1>
      <p><span style="font-size:36px">Call of Cthulhu PC Game 2018 Overview.</span> Call of Cthulhu, the official videogame inspired by Chaosium’s classic pen and paper RPG, brings you deep into a world of creeping madness and shrouded Old Gods within Lovecraft’s iconic universe.1924. Private Investigator Pierce is sent to look into the tragic death of the Hawkins family on the isolated Darkwater Island. Soon enough, Pierce is pulled into a terrifying world of conspiracies, cultists, and cosmic horrors.</p>
    
	  <a href="http://www.callofcthulhu-game.com/en" target="_blank">
   <button class="button">Download </button>
</a>
	  
	  
    </div>
    <div class="column-33">
        <img src="images/hitman1.jpg" width="335" height="471">
	  <img src="images/hitman2.jpg" width="335" height="471">
	  <img src="images/hitman3.jpg" width="335" height="471">
    </div>
  </div>
</div>




<!-- House Flipper Halloween -->
<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33">
      <img src="images/hitman1.jpg" width="335" height="471">
	  <img src="images/hitman2.jpg" width="335" height="471">
	  <img src="images/hitman3.jpg" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"><b>House Flipper Halloween </b></h1>
      <h1 class="large-font" style="color:red;"><b>why it ?</b></h1>
      <p><span style="font-size:24px">House Flipper Halloween PC Game 2018 Overview.</span>House Flipper is a unique chance to become a one-man renovation crew. Buy, repair and remodel devastated houses. Give them a second life and sell them at a profit!.What you’ve got at your disposal is a set of tools and parts. Use them to hammer, drill, nail and screw things together, and do whatever is necessary to fit, fix or clean up stuff.</p>
       <a href="http://www.houseflippergame.com/" target="_blank">
	  <button class="button" style="background-color:red">Download</button>
	  </a>
    </div>
  </div>
</div>
	
	
  </body>
</html>
