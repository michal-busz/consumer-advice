<?php
require('../lib/fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
    function Header()
    {
        // Logo
        $this->Image("upload/".$_FILES["image"]["name"],10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30,10,'Title',1,0,'C');
        // Line break
        $this->Ln(20);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,'Name: '.$_POST['name'],0,1);
$pdf->Cell(0,10,'Email: '.$_POST['email'],0,1);
$pdf->Cell(0,10,'Number: '.$_POST['number'],0,1);
$pdf->Cell(0,10,'Company: '.$_POST['company'],0,1);
$pdf->Cell(0,10,'Address: '.$_POST['address'],0,1);
$pdf->Output();
unlink("upload/".$_FILES["image"]["name"]);
?>