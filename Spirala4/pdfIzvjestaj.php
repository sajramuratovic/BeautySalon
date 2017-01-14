<?php
$conn = mysqli_connect('localhost', 'root', '', 'sajrinabaza');
if(!$conn)
{
	die("Connection failed:".mysqli_connect_error());
}
require('fpdf181/fpdf.php');

 
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','I', 10);

$sql = "SELECT * FROM articles";
	 $result = mysqli_query($conn, $sql);
	 $i=1;
	 while ($row = $result->fetch_assoc())
	 {
		$pdf->Cell(0,10,'Article number: '.$i.':',0,2);
	    $pdf->Cell(0,10,'Title :' .$row['title'],0,1);
		$pdf->Cell(0,10,'Description :' .$row['description'],0,1);
		$pdf->Cell(0,10,'Author :' .$row['author'],0,1); 
		$i=$i+1;
	 }

/*
$xmlfajl= 'XML/articles.xml';
if(file_exists($xmlfajl)){
	$files= simplexml_load_file($xmlfajl);
}
$i=1;
	foreach($files->article as $file){
		$pdf->Cell(0,10,'Article number: '.$i.':',0,2);
	    $pdf->Cell(0,10,'Title :' .$file->title,0,1);
		$pdf->Cell(0,10,'Description :' .$file->description,0,1);
		$pdf->Cell(0,10,'Author :' .$file->author,0,1);

		$i=$i+1;
	}
*/

$pdf->Output();

?>