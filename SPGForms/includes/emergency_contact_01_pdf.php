<?php
//This is used by all forms
//except for UX

// Emergency Contact Section
$pdf->SetFont('Arial','B',$titleFZ);
$pdf->Cell(0,$ch,'EMERGENCY CONTACT');
$pdf->Ln();
$pdf->SetFont('Arial','',$contentFZ);
$Theads = ["NAME", "RELATIONSHIP", "PHONE NUMBER"];
foreach ($Theads as $Thead) $pdf->Cell($pw/3,$ch,$Thead,1);
$pdf->Ln();
$pdf->Cell($pw/3,$ch, $row['EmergencyName'],1);
$pdf->Cell($pw/3,$ch, $row['EmergencyRelationship'],1);
$pdf->Cell($pw/3,$ch, $row['EmergencyPhone'],1);
$pdf->Ln($ch*2);

?>