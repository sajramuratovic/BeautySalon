<?php
$conn = mysqli_connect('localhost', 'root', '', 'sajrinabaza');
if(!$conn)
{
	die("Connection failed:".mysqli_connect_error());
}	
     $sql = "SELECT * FROM articles";
	 $result = mysqli_query($conn, $sql);
	 $csv = '';
	 while ($row = $result->fetch_assoc())
	 {
		 $csv = $row['title'].", ".$row['description'].", ".$row['author']."\n";
		 echo $csv;
	 }
	 
	/*$dom = new DOMDocument();
	$dom->load('XML/articles.xml');

	$root = $dom->documentElement;
	$results = $root->getElementsByTagName( 'article' );
	$csv = '';

    foreach ($results as $result) {
	$csv .= $result->childNodes->item(0)->nodeValue .',' . $result->childNodes->item(1)->nodeValue . ',' . $result->childNodes->item(2)->nodeValue ."\n";
    }
	*/
	
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename=clanci.csv');

?>