<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title> Beauty salon </title>
      <link rel="stylesheet" href="style.css" />
	  <link rel="stylesheet" href="aboutUs.css" />	  
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
      <div id= "slider" style= "background-image: url('images/background.jpg');" >
         <div class="text">
            <h3>ABOUT US</h3>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Hanc quoque iucunditatem, si vis, transfer in animum; <br>
                  Habes, inquam, Cato, formam eorum, de quibus loquor, philosophorum.
	        </p>
         </div>
      </div>
	  <div class="newsaboutUs">
            <h2>Our Salon Image Gallery</h2>
            <h4>Quisque nulla ante, posuere laoreet ultrici, tempus non augue</h4>
            <div class="responsive">
               <div class="img">
                  <a target="_blank" href="images/ourgallery1.jpg">
                  <img src="images/ourgallery1.jpg" alt="Our Salon Services" width="300" height="200">
                  </a>
                  <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
               </div>
            </div>
            <div class="responsive">
               <div class="img">
                  <a target="_blank" href="images/ourgallery2.jpg">
                  <img src="images/ourgallery2.jpg" alt="Our Salon" width="600" height="400">
                  </a>
                  <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
               </div>
            </div>
            <div class="responsive">
               <div class="img">
                  <a target="_blank" href="images/ourgallery3.jpg">
                  <img src="images/ourgallery3.jpg" alt="Our Beauty Salon" width="600" height="400">
                  </a>
                  <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
               </div>
            </div>
            <div class="responsive">
               <div class="img">
                  <a target="_blank" href="images/ourgallery4.jpg">
                  <img src="images/ourgallery4.jpg" alt="Salon" width="600" height="400">
                  </a>
                  <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
               </div>
            </div>
            <div class="clearfix"></div>
            <div style="padding:6px;">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Hanc quoque iucunditatem, si vis, transfer in animum;
                  Habes, inquam, Cato, formam eorum, de quibus loquor, philosophorum. 
                  Pauca mutat vel plura sane; Huius, Lyco, oratione locuples, rebus ipsis ielunior.</p>
            </div>
             <h2>Salon Treatments and Beauty Services</h2>
            <h4>Quisque nulla ante, posuere laoreet ultrici, tempus non augue</h4>
            <div class="responsive">
               <div class="img">
                  <a target="_blank" href="images/treatment1.jpg">
                  <img src="images/treatment1.jpg" alt="Our Salon Services" width="300" height="200">
                  </a>
                  <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
               </div>
            </div>
            <div class="responsive">
               <div class="img">
                  <a target="_blank" href="images/treatment2.jpg">
                  <img src="images/treatment2.jpg" alt="Our Salon" width="600" height="400">
                  </a>
                  <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
               </div>
            </div>
            <div class="responsive">
               <div class="img">
                  <a target="_blank" href="images/treatment3.jpg">
                  <img src="images/treatment3.jpg" alt="Our Beauty Salon" width="600" height="400">
                  </a>
                  <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
               </div>
            </div>
            <div class="responsive">
               <div class="img">
                  <a target="images/treatment2.jpg">
                  <img src="images/treatment2.jpg" alt="Salon" width="600" height="400">
                  </a>
                  <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
               </div>
            </div>
            <div class="clearfix"></div>
            <div style="padding:6px;">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Hanc quoque iucunditatem, si vis, transfer in animum;
                  Habes, inquam, Cato, formam eorum, de quibus loquor, philosophorum. 
                  Pauca mutat vel plura sane; Huius, Lyco, oratione locuples, rebus ipsis ielunior.</p>
            </div>

				        <div class="container1">
            <h2>The Best Articles About Beauty and Fashion</h2>
            <h4>Quisque nulla ante, posuere laoreet ultrici, tempus non augue</h4>
            <div class="description">
               <?php
	           $dom = new DOMDocument();
	           $dom->load('XML/articles.xml');

	            $root = $dom->documentElement;
	
	            $results = $root->getElementsByTagName( 'article' );
	            foreach( $results  as $result){
		        //echo 'Result Id: ' . $result->getAttribute('id');
		        foreach( $result->getElementsByTagName('title') as $title ){
				   echo '' . $title->nodeValue;
				   echo "<br>";
		         }
		        foreach( $result->getElementsByTagName('description') as $description ){
				  echo '' . $description->nodeValue;
				  echo "<br>";
		        }
		        foreach( $result->getElementsByTagName('author') as $author ){
				   echo '' . $author->nodeValue . "";
				   echo "<br>";
		        }
		echo "<br>";
	}
?>
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