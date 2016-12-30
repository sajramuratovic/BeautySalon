<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <title> Beauty salon </title>
      <link rel="stylesheet" href="style.css" />
      <link rel="stylesheet" href="contact.css" />
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
            <h3>CONTACT</h3>
            <p>
               Lorem ipsum dolor sit amet, consectetur adipiscing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <p><br>Phone:<br>+38733-98-74-56<br><br>E-mail:<br>glow@gmail.com<br><br>Address:<br>Zmaja od Bosne bb
            </p>
         </div>
      </div>
      <div id="form-main">
         <div id="form-div">
             <form class="form" id="form1" onsubmit="return Validate()">
               <h3>Have a questions?</h3>
               <div class="name">
                  <label>Your Name:</label>
                  <input name="name" type=text class="feedback-input" />
				  <p class="form-error" id="name-error"></p>
               </div>
               <div class="email">
                  <label>Your Email:</label>
                  <input name="email" type="email" class="feedback-input"  />
				  <p class="form-error" id="email-error"></p>
               </div>
               <div class="tel">
                  <label>Your Telephone:</label>
                  <input type="tel"  class="feedback-input" name="tel" >
				  <p class="form-error" id="tel-error"></p>
               </div>
               <div class="text">
                  <label>Your Message:</label>
                  <textarea name="text" class="feedback-input" ></textarea>
				  <p class="form-error" id="message-error"></p>
               </div>
               <div class="submit">
                  <input type="submit" value="SEND" id="button-contact"/>
                  <div class="ease"></div>
               </div>
            </form>
         </div>
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
	     <script src="contactscript.js"></script>
		 <script src="dropdownMenu.js"></script>
   </body>
</html>