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
	        <div class="formaZaSearch">
            <div class="forma1">
               <form class="forma" id="form2">
			   <h3>Search news</h3>
                  <div>
                     <input id = "searchText" type="text" name="inputSearch" placeholder="Title" size="50" onkeyup="showResult(this.value)">
					 <div id="livesearch"></div>
					 </div>
                  <div>
                     <input type="button" class="button-search" name="search" value="Search" onclick="showAllResults();">
                  </div>
				  <div class="naslovClanak">
            Rezultati pretrage:
          </div>
          <div id="prikazRezultata" style = "display:block;"></div>
          </div>
               </form>
            </div>
         </div>
		 	  <script src="functionForSearch.js"></script>
       </body>
</html>