<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("XML/articles.xml");

$x=$xmlDoc->getElementsByTagName('article');

$q=$_GET["q"];
$hint = "";


if (strlen($q)>0) {
	
  $hint="";
  
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('title');
	$alternat = $x->item($i)->getElementsByTagName('author');
    $z=$x->item($i)->getElementsByTagName('description');
    if ($y->item(0)->nodeType==1) {
      
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") 
		{
          $hint="<a href= 'aboutUs.php?id=" . 
          $z->item(0)->childNodes->item(0)->nodeValue . 
          "' target='_blank'>" . 
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }else
		{
          $hint=$hint . "<br /><a href= aboutUs.php?id=" . 
          $z->item(0)->childNodes->item(0)->nodeValue . 
          "' target='_blank'>" . 
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }else if (stristr($alternat->item(0)->childNodes->item(0)->nodeValue,$q))
      {
          if ($hint=="") {
          $hint=$hint . "<a href='aboutUs.php?id=" . 
          $z->item(0)->childNodes->item(0)->nodeValue . 
          "' target='_blank'>" . 
          $alternat->item(0)->childNodes->item(0)->nodeValue . "</a>";
        } else {          
          $hint=$hint . "<br /><a href='aboutUs.php?id=" . 
          $z->item(0)->childNodes->item(0)->nodeValue . 
          "' target='_blank'>" . 
          $alternat->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }
    }
  }
}

if ($hint=="") 
{
  $response="No suggestion";
} else {
  $response=$hint;
}

//output the response
echo $response;
?>