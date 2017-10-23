<?php
//This is used by:
//- UX

    // Ideal Companies Section
    $pdf->SetFont('Arial','B',$titleFZ);
    $pdf->Cell(0,$ch,'IDEAL COMPANIES');
    $pdf->Ln();
    $pdf->SetFont('Arial','',$contentFZ);
    $Theads = ["COMPANY", "DESCRIPTION", "COMPANY", "DESCRIPTION"];
    foreach ($Theads as $Thead) $pdf->Cell($pw/4,$ch,$Thead,1);
    $pdf->Ln();
    $pdf->Cell($pw/4,$ch, '1. ' . $row['IdealCompany1'],1);
    $pdf->Cell($pw/4,$ch, $row['IdealCompanyNote1'],1);
    $pdf->Cell($pw/4,$ch, '3. ' . $row['IdealCompany3'],1);
    $pdf->Cell($pw/4,$ch, $row['IdealCompanyNote3'],1,1);
    $pdf->Cell($pw/4,$ch, '2. ' . $row['IdealCompany2'],1);
    $pdf->Cell($pw/4,$ch, $row['IdealCompanyNote2'],1);
    $pdf->Cell($pw/4,$ch, '4. ' . $row['IdealCompany4'],1);
    $pdf->Cell($pw/4,$ch, $row['IdealCompanyNote4'],1);
    $pdf->Ln($ch*2);

?>