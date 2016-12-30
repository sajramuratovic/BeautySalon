<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <title> Beauty salon </title>
      <link rel="stylesheet" href="style.css" />
      <link rel="stylesheet" href="promotions.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
   <body>
      <header id="header">
         <div class="container">
            <div class= "logo">
               <h2><i class= "fa fa-heart"></i> Beauty Salon Glow</h2>
            </div>
            <nav id="nav">
               <ul>
                  <li><a href= "index.php" class="active">Home</a></li>
                  <li><a href= "aboutUs.php">About us</a></li>
                  <li><a href= "services.php">Services</a></li>
                  <li><a href= "promotions.php">Promotions</a></li>
                  <li><a href= "contact.php">Contact</a></li>
               </ul>
            </nav>
         </div>
      </header>
      <div id= "slider" style="background-image: url('images/background.jpg');" >
         <div class="text">
            <h3>PROMOTIONS</h3>
            <p>
               Lorem ipsum dolor sit amet, consectetur adipiscing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
         </div>
      </div>
      <div class="pro">
         <div class="container1">
            <img id = "img1" src="images/promotions1.jpg" alt="Face massage" onclick="MojaFunkcija()">
            <div class="topleft">
               <h3>Face massage</h3>
               <p>Duration: 30 min      Cost: $149</p>
            </div>
         </div>
         <div class="container1">
            <img id = "img2" src="images/promotions2.jpg" alt="Aroma therapy" >
            <div class="topleft">
               <h3>Aroma therapy</h3>
               <p>Duration: 30 min      Cost: $39</p>
            </div>
         </div>
         <div class="container1">
            <img id = "img3" src="images/promotions3.jpg" alt="Manicure" >
            <div class="topleft">
               <h3>Manicure</h3>
               <p>Duration: 25 min      Cost: $39</p>
            </div>
         </div>
      </div>	  
	  <div id="Modal" class="modal">
	        <span class="close">×</span>
	        <img class="modal-content" id="imgModal">
	  <div id="caption"></div>
	  </div>
      <section>
         <div class="container">
            <div class= "icon">
               <i class= "fa fa-facebook"></i>
            </div>
            <div class="description">
               <h3>Facebook Marketing</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.
               </p>
            </div>
            <div class= "icon">
               <i class= "fa fa-twitter"></i>
            </div>
            <div class="description">
               <h3>Twitter Marketing</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.
               </p>
            </div>
            <div class= "icon">
               <i class= "fa fa-google-plus"></i>
            </div>
            <div class="description">
               <h3>Google Plus Marketing</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.
               </p>
            </div>
         </div>
      </section>
      <footer>
         <div class="container">
            <div class="logmenu">
               <ul>
                  <li><a href= "SignUpIn.php">Sign in</a></li>
                  <li><a href= "signOut.php">Sign out</a></li>
               </ul>
            </div>
         </div>
      </footer>
	  <script src="dropdownMenu.js"></script>
	  	  <script src="gallery.js"></script>
	  </body>
</html>