<?php
//This is used by:
//- UX

    // References Section
    $pdf->SetFont('Arial','B',$titleFZ);
    $pdf->Cell(0,$ch,'REFERENCES');
    $pdf->Ln();
    $pdf->SetFont('Arial','',$contentFZ);
    $pdf->Cell(0,$ch,'PLEASE LIST THE NAMES OF THREE PERSONS NOT RELATED TO YOU WHOM YOU HAVE KNOWN AT LEAST ONE YEAR.');
    $pdf->Ln();
    $Theads = ["NAME", "TITLE", "COMPANY", "CONTACT INFORMATION", "YEARS ACQUAINTED"];
    foreach ($Theads as $Thead) $pdf->Cell($pw/5,$ch,$Thead,1);
    $pdf->Ln();
    $pdf->Cell($pw/5,$ch,'1. ' . $row['ReferenceName1'],1);
    $pdf->Cell($pw/5,$ch, $row['ReferenceTitle1'],1);
    $pdf->Cell($pw/5,$ch, $row['ReferenceCompany1'],1);
    $pdf->Cell($pw/5,$ch, $row['ReferenceContact1'],1);
    $pdf->Cell($pw/5,$ch, $row['ReferenceAcquaintedYears1'],1);
    $pdf->Ln();
    $pdf->Cell($pw/5,$ch,'2. ' . $row['ReferenceName2'],1);
    $pdf->Cell($pw/5,$ch, $row['ReferenceTitle2'],1);
    $pdf->Cell($pw/5,$ch, $row['ReferenceCompany2'],1);
    $pdf->Cell($pw/5,$ch, $row['ReferenceContact2'],1);
    $pdf->Cell($pw/5,$ch, $row['ReferenceAcquaintedYears2'],1);
    $pdf->Ln();
    $pdf->Cell($pw/5,$ch,'3. ' . $row['ReferenceName3'],1);
    $pdf->Cell($pw/5,$ch, $row['ReferenceTitle3'],1);
    $pdf->Cell($pw/5,$ch, $row['ReferenceCompany3'],1);
    $pdf->Cell($pw/5,$ch, $row['ReferenceContact3'],1);
    $pdf->Cell($pw/5,$ch, $row['ReferenceAcquaintedYears3'],1);
    $pdf->Ln($ch*2);

?>