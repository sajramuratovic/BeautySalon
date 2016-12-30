<?php
	$dom = new DOMDocument();
	$dom->load('XML/articles.xml');

	$root = $dom->documentElement;
	$results = $root->getElementsByTagName( 'article' );
	$csv = '';

    foreach ($results as $result) {
	$csv .= $result->childNodes->item(0)->nodeValue .',' . $result->childNodes->item(1)->nodeValue . ',' . $result->childNodes->item(2)->nodeValue ."\n";
    }

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename=najave.csv');

echo $csv;
?>