<?php
session_start();

// forma add news validacija
// define variables and set to empty values
$title = $description = $author = "";
$titleErr = $descriptionErr = $authorErr = "";
$errors = 0;

//varijable za validaciju forme delete news
$titledelete = "";
$titledeleteErr = "";

//varijable za validaciju edit news
$titleedit = "";
$titleeditErr = "";

 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//validacija za formu add news
if(isset($_POST['add']))
{
	
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  if (empty($_POST["title"])) 
  {
    $titleErr = "Title is required!";
	$errors++;
  } 
  else
  {
    $title = test_input($_POST["title"]);
	if (strlen($_POST['title']) < 3) 
	{
      $titleErr = "Title must be at least 3 characters long! You must enter the full name of article!"; 
	  $errors++;
    }
 }
 
  if (empty($_POST["article"])) 
  {
    $descriptionErr = "Description is required!";
	$errors++;
  } 
  else 
  {
    $description = test_input($_POST["article"]);
    if (strlen($_POST['article']) < 8) 
	{
      $descriptionErr = "Description must be at least 8 characters long!"; 
	  $errors++;
    }
  }
  
    if (empty($_POST["author"]))
    {
        $authorErr = "Author name is required!";
		$errors++;
    } 
  else 
  {
    $author = test_input($_POST["author"]);
        if (strlen($_POST['author']) < 8) 
	{
      $authorErr = "Author name must be at least 8 characters long! Enter the full name! "; 
	  $errors++;
    }
  } 
}

	if(!empty($_POST["title"]) && !empty($_POST["article"]) && !empty($_POST["author"]) && $errors == 0)
   {
	
	//Add articles in articles.xml
	$xml = new DOMDocument();
	$xml->load('XML/articles.xml');
	
	$naslov = $_POST['title'];
	$sadrzajArtikla = $_POST['article'];
	$autor = $_POST['author'];
	
	$rootTag = $xml->getElementsByTagName("root")->item(0);
	
	$infoTag = $xml->createElement("article");


	$titleTag = $xml->createElement("title", $naslov);
	$descriptionTag = $xml->createElement("description", $sadrzajArtikla);
	$authorTag = $xml->createElement("author", $autor);
	
	$infoTag->appendChild($titleTag);
	$infoTag->appendChild($descriptionTag);
	$infoTag->appendChild($authorTag);
	
	$rootTag->appendChild($infoTag);
	$xml->save('XML/articles.xml');	
	
	$title = $description = $author = "";
}
}

if(isset($_POST['delete']))
{
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  if (empty($_POST["titledelete"])) 
  {
    $titledeleteErr = "Title is required! Enter the full title of article you want to delete!";
  } 
  else 
  {
    $titledelete = test_input($_POST["titledelete"]);
	if (strlen($_POST['title']) < 3) 
	{
      $titledescriptionErr = "Title must be at least 3 characters long! You must enter the full name of article!"; 
	  $errors++;
    }
	
  }	
  }
  
  if(!empty($_POST["titledelete"]))
  {
  
    $xml = new DOMDocument();
	$xml->load('XML/articles.xml');
	
	$obrisi = false;
	$root = $xml->documentElement;
	$results = $root->getElementsByTagName( 'article' );
	
	
	$naslovZaBrisanje = $_POST['titledelete'];
	
	foreach ($results as $result) {
	if( $naslovZaBrisanje == $result->childNodes->item(0)->nodeValue ) 
	{
		$obrisi = true;
    }
	  }
	  if($obrisi == false)
	  {
		$titledeleteErr = "That article does not exist! Please check your input title!";
	  }
	  
    $xpath = new DOMXPATH($xml);
	
	foreach($xpath->query("/root/article[title = '$naslovZaBrisanje']") as $node)
	{
		$node->parentNode->removeChild($node);
	}
	
	    $xml->formatoutput = true;
		$xml->save('XML/articles.xml');	
}
}
//validacija za edit news
if(isset($_POST['edit']))
{
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  if (empty($_POST["titleedit"])) 
  {
    $titleeditErr = "Title is required! Enter the full title of article you want to delete!";
	$naslovzaInput = $naslovzaInput1 = $naslovzaInput2 = "";
  } 

  }
	
	if(!empty($_POST["titleedit"]))
	{
	$xml = new DOMDocument();
	$xml->load('XML/articles.xml');
	
	$obrisi = false;
	$root = $xml->documentElement;
	$results = $root->getElementsByTagName( 'article' );
	
	
	$naslovZaEdit = $_POST['titleedit'];
	
	foreach ($results as $result) {
	if( $naslovZaEdit == $result->childNodes->item(0)->nodeValue ) 
	{
		$obrisi = true;
    }
	  }
	  if($obrisi == false)
	  {
		$titleeditErr = "That article does not exist! Please check your input title!";
		$naslovzaInput = $naslovzaInput1 = $naslovzaInput2 = "";
	  }
		
	$xpath = new DOMXPATH($xml);
	
	foreach($xpath->query("/root/article[title = '$naslovZaEdit']") as $node)
	{
		$naslovzaInput=$node->childNodes->item(0)->nodeValue;
		$naslovzaInput1=$node->childNodes->item(1)->nodeValue;
		$naslovzaInput2=$node->childNodes->item(2)->nodeValue;
	}
	
    	$xml->formatoutput = true;
		$xml->save('XML/articles.xml');	
	}
}


if(isset($_POST['update']))
{
	$xml = new DOMDocument();
	$xml->load('XML/articles.xml');
	
	$descriptionUpdate = $_POST['articleUpdate'];
	$autorUpdate = $_POST['authorUpdate'];
	
	$naslov = $_POST['titleupdate'];
	
	$xpath = new DOMXPATH($xml);
	
	foreach($xpath->query("/root/article[title = '$naslov']") as $node)
	{
        $node->childNodes->item(0)->nodeValue = $naslov; 
		$node->childNodes->item(1)->nodeValue = $descriptionUpdate;
		$node->childNodes->item(2)->nodeValue = $autorUpdate;
	}
	
    	    $xml->formatoutput = true;
		$xml->save('XML/articles.xml');	

}

?>

<!DOCTYPE html>
<html>
   <head>
      <title> Beauty salon </title>
      <link rel="stylesheet" href="style.css" />
	  <link rel="stylesheet" href="addNews.css" />
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
	           <div class="formleft">
            <div class="forme">
               <form class="form" id="form2" method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			   <h3>Add news</h3>
                  <div>
                     <input type="text" name="title" placeholder="Title" value="<?php echo $title;?>" >
                     <div id="title_error" class="val_error"><?php echo $titleErr; ?></div>
                  </div>
                  <div>
                     <textarea placeholder="Description" name="article" ><?php echo $description; ?></textarea>
                     <div id="description_error" class="val_error"><?php echo $descriptionErr; ?></div>
                  </div>
                  <div>
                     <input type="text" name="author" placeholder="Author" value="<?php echo $author;?>" >
					 <div id="author_error" class="val_error"><?php echo $authorErr; ?></div>
                  </div>
                  <div>
                     <input type="submit" class="button-add" name="add" value="Add">
                  </div>
				  <h3>Delete news</h3>
                  <div>
                     <input type="text" name="titledelete" placeholder="You must enter the title of article">
					 <div id="title_deleteerror" class="val_error"><?php echo $titledeleteErr; ?></div>
                  </div>
				  <div>
                     <input type="submit" class="button-add" name="delete" value="Delete">
                  </div>
				  <h3>Edit news</h3>
                  <div>
                     <input type="text" name="titleedit" placeholder="You must enter the title of article">
					 <div id="title_editerror" class="val_error"><?php echo $titleeditErr; ?></div>
                  </div>
				  <div>
                     <input type="submit" class="button-add" name="edit" value="Edit">
                  </div>
				  <?php if(isset($_POST['edit'])) { ?>
				  <h3>Update news</h3>
                  <div>
                     <input type="text" name="titleupdate" placeholder="Title" value = "<?php echo $naslovzaInput; ?>">
					 <?php
					  echo '<p style="color:red;">It is not possible to change the title, if you try to change the title nothing will happen. You can only update description and name of the author!</p>';
				  ?>
                  </div>
				  <div>
                     <textarea placeholder="Description" name="articleUpdate" ><?php echo $naslovzaInput1; ?></textarea>
                  </div>
                  <div>
                     <input type="text" name="authorUpdate" placeholder="Author" value = "<?php echo $naslovzaInput2; ?>">
                  </div>
                  <div>
                     <input type="submit" class="button-add" name="update" value="Update" >
                  </div>
				  <?php } ?>
			  
               </form>
            </div>
         </div>
       </body>
</html>