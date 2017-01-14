<?php

$xmlDoc = new DOMDocument();
$xmlDoc->load('XML/registrovanikorisnici.xml');
$mysql_hostname = "localhost"; 
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "sajrinabaza";

$dbh = new PDO("mysql:dbname={$mysql_database};host={$mysql_hostname};port=3306", $mysql_user, $mysql_password);

$xmlObject = $xmlDoc->getElementsByTagName('user');
$itemCount = $xmlObject->length;

for ($i=0; $i < $itemCount; $i++){
   $username = $xmlObject->item($i)->getElementsByTagName('username')->item(0)->childNodes->item(0)->nodeValue;
   $email = $xmlObject->item($i)->getElementsByTagName('email')->item(0)->childNodes->item(0)->nodeValue;
   $password = $xmlObject->item($i)->getElementsByTagName('password')->item(0)->childNodes->item(0)->nodeValue;
   $sql = $dbh->prepare("INSERT INTO `users` (`username`, `email`, `password`) VALUES (?, ?, ?)");
   $sql->execute(array($username, $email, $password));
}


$xmlDoc1 = new DOMDocument();
$xmlDoc1->load('XML/articles.xml');

$xmlObject1 = $xmlDoc1->getElementsByTagName('article');
$itemCount1 = $xmlObject1->length;

for ($i=0; $i < $itemCount1; $i++){
   $title = $xmlObject1->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
   $description = $xmlObject1->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
   $author = $xmlObject1->item($i)->getElementsByTagName('author')->item(0)->childNodes->item(0)->nodeValue;
   			
			$sql = $dbh->prepare("SELECT * FROM articles where title = '$title' and description = '$description' and author = '$author'");
			$sql->execute();
			$broj = $sql->rowCount();
			
			if ($broj < 1)
			{
              $sql = $dbh->prepare("INSERT INTO `articles` (`title`, `description`, `author`) VALUES (?, ?, ?)");
              $sql->execute(array($title, $description, $author));
			}
} 

header('Location: adminIndex.php');
			die;
?>