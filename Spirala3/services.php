<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <title> Beauty salon </title>
      <link rel="stylesheet" href="style.css" />
	  <link rel="stylesheet" href="services.css" />
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
            <h3>SERVICES</h3>
            <p>
               Lorem ipsum dolor sit amet, consectetur adipiscing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
         </div>
      </div>
	   <div class="services">
            <div class="block-menu ">
               <div class="titlebig" >Waxing, Threading</div>
                  <table class="table" >
                     <tbody>
                        <tr>
                           <td class="name-option" >Full Body Massage </td>
                           <td class="time-option" >/55 mins/ </td>
                           <td class="price-option">$4.00</td>
                        </tr>
                        <tr>
                           <td class="name-option" >Regular Seated Massage</td>
                           <td class="time-option" >/15 mins/ </td>
                           <td class="price-option">$5.00</td>
                        </tr>
                        <tr>
                           <td class="name-option" >Body Polish</td>
                           <td class="time-option" >/25 mins/ </td>
                           <td class="price-option">$9.00</td>
                        </tr>
                        <tr>
                           <td class="name-option" >Sea Mud Wrap</td>
                           <td class="time-option" >/35 mins/ </td>
                           <td class="price-option">$3.00</td>
                        </tr>
                        <tr>
                           <td class="name-option" >The Ultimate Body Treatment</td>
                           <td class="time-option" >/55 mins/ </td>
                           <td class="price-option">$9.00</td>
                        </tr>
                        <tr>
                           <td class="name-option" >Add on: Deep Tissue Massage </td>
                           <td class="time-option" >/45 mins/ </td>
                           <td class="price-option">$1.00</td>
                        </tr>
                        <tr>
                           <td class="name-option" >Hot Stone Massage</td>
                           <td class="time-option" >/25 mins/ </td>
                           <td class="price-option">$59.00</td>
                        </tr>
                        <tr>
                           <td class="name-option" >Maternity Massage</td>
                           <td class="time-option" >/15 mins/ </td>
                           <td class="price-option">$19.00</td>
                        </tr>
                     </tbody>
                  </table>
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
		 <script src="dropdownMenu.js"></script>
   </body>
</html>