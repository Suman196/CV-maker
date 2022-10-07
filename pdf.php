<?php
if(!empty($_POST['name']))
  $name = $_POST['name'];
  $email = $_POST['email'];
  $ph_no = $_POST['ph_no'];
  $education = $_POST['education'];
  $experience = $_POST['experience'];
  $links = $_POST['links'];
  $course = $_POST['course'];
  $Projects = $_POST['Projects'];
  $skills= $_POST['skills'];
  $Publications = $_POST['Publications'];
  $Achievements = $_POST['Achievements'];
  $po_re = $_POST['po-re'];
  

  require("fpdf/fpdf.php");
  $pdf = new FPDF;
  $pdf->AddPage();
 
  $pdf->SetFont("Arial","",16);
  
  // $pdf->Cell(0,10,$text,1,1);
  $pdf->MultiCell(0,10,$name,1,1);
  $pdf->Cell(0,10,$email,1,1);
  $pdf->Cell(0,10,$ph_no,1,1);
  $pdf->Cell(0,10,$education,1,1);
  $pdf->Cell(0,10,$experience,1,1);
  $pdf->Cell(0,10,$links,1,1);
  $pdf->Cell(0,10,$course,1,1);
  $pdf->Cell(0,10,$Projects,1,1);
  $pdf->Cell(0,10,$skills,1,1);
  $pdf->Cell(0,10,$Publications,1,1);
  $pdf->Cell(0,10,$Achievements,1,1);
  $pdf->Cell(0,10,$po_re,1,1);

  // $pdf->MultiCell(0,10,$text,'LRTB','L',false);
  $pdf->output();
    
?>