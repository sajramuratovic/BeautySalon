<?php
session_start();
?>

<!DOCTYPE html>
<html>
   <head>
      <title> Beauty salon </title>
      <link rel="stylesheet" href="style.css" />
	  <link rel="stylesheet" href="admin_style.css" />
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
                  <li><a href= "adminIndex.php">Welcome</a></li>
                  <li><a href= "addNews.php">Add News</a></li>
                  <li><a href= "search.php">Search</a></li>
				  <li><a href= "reports.php">Reports</a></li>
				  <li><a href= "signOut.php">Sign Out</a></li>
				   </ul>
            </nav>
         </div>
      </header> 
      <div class= "FormIzvjestaji">
         <div class="formleft1">
            <div class="formee">
               <form class="form" id="formpdf1" action= "pdfIzvjestaj.php">
			   <h3>Generisanje izvjestaja u obliku pdfa</h3>
                  <div>
                     <input type="submit" class="button-pdf" name="buttonPdf" value="OK">
                  </div>
               </form>
            </div>
         </div>
            <div class="formee">
               <form class="form" id="formcsv2" action= "csvIzvjestaj.php">
			   <h3>Generisanje izvjestaja u obliku csva</h3>
                  <div>
                     <input type="submit" class="button-csv" name="button-csv" value="Download">
                  </div>
               </form>
         </div>
		 <div class="formee">
               <form class="form" id="formXmltoDb" action= "XMLtoDB.php">
			   <h3>Prebacivanje podataka iz xml-a u bazu</h3>
                  <div>
                     <input type="submit" class="button-xml" name="button-xml" value="XML to DB">
                  </div>
               </form>
         </div>
       </body>
</html>