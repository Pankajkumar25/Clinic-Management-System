<?php
require_once("profile_info.php");
require('fpdf.php');
$id=$_REQUEST['id'];
$sql="SELECT * FROM `doc_pre` where id=$id";
$query=mysqli_query($con,$sql);
$row_data=mysqli_fetch_row($query);

$pdf=new FPDF();
$pdf->Addpage();
$pdf->setFont("Arial","",16);
$pdf->SetFillColor(256,256,256);

$pdf->ln(10);
$pdf->Cell(0,10,"Clinic Name",0,10,'C',true);

$pdf->ln(53);
$pdf->Cell(0,10,"profile id=$id",0,0,'C',true);
for($i=1;$i<7;$i++)
{$pdf->ln(20);
$pdf->Cell(0,10,"$row_data[$i]",0,0,'C',true);
}		
//First table: output all columns
$pdf->Image("cliniclogo.png",80,30,50);

//$pdf->Output("abc.pdf","d");
$pdf->Output();
?>